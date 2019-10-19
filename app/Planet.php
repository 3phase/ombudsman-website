<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    public function aliens(){
        return $this->hasMany('App\\Alien');
    }
    
    public function progress(){
        return $this->hasMany('App\\Progress');
    }

    public function alienCoordinates(){
        return $this->hasMany('App\\AlienCoordinates');
    }
}
