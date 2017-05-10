<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function dogs() {
        return $this->belongsToMany('App\Dog')->withTimestamps();  
    }
    
    public static function sortedTags() {
        return Tag::orderBy('name', 'ASC')->get(); 
    }

}
