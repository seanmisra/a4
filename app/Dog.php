<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    public function facts() {
        return $this->hasMany('App\Fact'); 
    }
}
