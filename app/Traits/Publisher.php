<?php

namespace App\Traits;

trait Publisher {
    
    public function setPublishedByAttribute($value) {
        $this->attributes['published_by'] = $value;
        $this->attributes['published_at'] = date('Y-m-d H:m:s');
    }
    
}