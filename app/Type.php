<?php

namespace App;

class Type extends Model
{
    use Traits\Management;
    
    public function pages() {
        return $this->morphedByMany('App\Page', 'typable');
    }
    
    public function posts() {
        return $this->morphedByMany('App\Post', 'typable');
    }
    
    public function products() {
        return $this->morphedByMany('App\Product', 'typable');
    }
}
