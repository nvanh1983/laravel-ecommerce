<?php

namespace App;


class Page extends Model
{
    use Traits\Management;
    
    public function types() {
       return $this->morphToMany('App\Type', 'typable');
    }
}
