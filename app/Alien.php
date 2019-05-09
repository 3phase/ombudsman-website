<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alien extends Model
{
    public function planets(){
        return $this->belongsToMany('App\\Planet', 'aliens_planets');
    }

    public function missions(){
        return $this->belongsToMany('App\\Node', 'aliens_missions');
    }

}
