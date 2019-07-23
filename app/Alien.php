<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alien extends Model
{
    public function planet(){
        return $this->belongsTo('App\\Planet', 'planet_id');
    }

    public function missions(){
        return $this->belongsToMany('App\\Node', 'aliens_missions');
    }

}   
