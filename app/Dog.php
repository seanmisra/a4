<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    public function facts() {
        return $this->hasMany('App\Fact'); 
    }
    
    
    public function tags() {
        return $this->belongsToMany('App\Tag')->withTimestamps(); 
    }
    
    // return all dog names in JSON string, to be handled by JavaScript
    public static function namesForDropdown() {
        $allDogs = Dog::all()->pluck('name')->toArray(); 
        sort($allDogs); 
        return json_encode($allDogs); 
    }
    
    public static function names() {
        return $allDogs = Dog::orderBy('name', 'ASC')->pluck('name')->toArray(); 
    }
}
