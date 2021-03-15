<?php

namespace App\Traits;

trait SearchTraits
{
    public function scopeSearch($query,$search){
        if(!empty($search)){
            return $query->where('name', 'LIKE', "%{$search}%");
        }
    }
}
