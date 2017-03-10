<?php

namespace App\Traits;

trait SlugTitle {
    
    public function setTitleAttribute($value) {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value, '-');
    }
    
}