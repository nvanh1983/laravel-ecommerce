<?php

namespace App\Traits;

trait Management {
    
    public function author() {
        return $this->belongsTo('App\User', 'created_by');
    }
    
    public function editor() {
        return $this->belongsTo('App\User', 'updated_by');
    }
    
    public function destroyer() {
        return $this->belongsTo('App\User', 'deleted_by');
    }
    
    public function publisher() {
        return $this->belongsTo('App\User', 'published_by');
    }
    
}