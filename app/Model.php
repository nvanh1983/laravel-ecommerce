<?php

namespace App;

use DB;
use Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class Model extends \Illuminate\Database\Eloquent\Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    public function setNameAttribute($value) {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = str_slug($value, '-');
    }
    
    public function setTitleAttribute($value) {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value, '-');
    }
    
    public function setSlugAttribute($value) {
        $this->attributes['slug'] = str_slug($value, '-');
    }
    
    // not working yet
    public function hasAttribute($attr) {
        return array_key_exists($attr, $this->attributes);
    }
    
    public function setPublishedByAttribute($value) {
        $this->attributes['published_by'] = $value;
        $this->attributes['published_at'] = date('Y-m-d H:m:s');
    }
    
    public function scopeFindSlug($q, $slug) {
        return $q->whereSlug($slug)->first();
    }
    
    public function scopeAllSlug($q, $slug) {
        return $q->where('slug', 'like', "%$slug%")->get();
    }
    

    
    public function getAllColumnsNames()
    {
        $table = $this->getTable();
        $driver = DB::connection()->getConfig('driver');
        $database = DB::connection()->getConfig('database');
        
        switch ($driver) {
            case 'pgsql':
                $query = "SELECT column_name FROM information_schema.columns WHERE table_name = '" . $table . "'";
                $column_name = 'column_name';
                $reverse = true;
                break;

            case 'mysql':
                $query = 'SHOW COLUMNS FROM ' . $table;
                $column_name = 'Field';
                $reverse = false;
                break;

            case 'sqlsrv':
                $parts = explode('.', $table);
                $num = (count($parts) - 1);
                $table = $parts[$num];
                $query = "SELECT column_name FROM " . $database . ".INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'".$table."'";
                $column_name = 'column_name';
                $reverse = false;
                break;

            default: 
                $error = 'Database driver not supported: ' . $driver;
                throw new Exception($error);
                break;
        }

        $columns = array();

        foreach(DB::select($query) as $column) {
            $columns[$column->$column_name] = $column->$column_name;
        }

        return $columns;
    }
}
