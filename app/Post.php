<?php

namespace App;

class Post extends Model
{
    use Traits\Management;
    
    public function types() {
       return $this->morphToMany('App\Type', 'typable');
    }
}
