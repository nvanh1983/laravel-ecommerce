<?php

namespace App\Traits;

trait SlugName {
    
    public function setNameAttribute($value) {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = str_slug($value, '-');
    }
    
}