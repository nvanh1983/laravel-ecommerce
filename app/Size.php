<?php

namespace App;

class Size extends Model
{
    use Traits\Management;
    
    public function products() {
        return $this->morphedByMany('App\Product', 'sizable');
    }
}
