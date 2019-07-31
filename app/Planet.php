<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    public function aliens(){
        return $this->hasMany('App\\Alien');
    }
}
