<?php

namespace App;

class Product extends Model
{
    use Traits\Management;
    
    public function types() {
       return $this->morphToMany('App\Type', 'typable');
    }
    
    public function sizes() {
       return $this->morphToMany('App\Size', 'sizable');
    }
}
