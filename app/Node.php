<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    public function aliens(){
        return $this->belongsToMany('App\\Alien', 'aliens_missions');
    }

    public function options(){
        return $this->belongsToMany('App\\Node', 'options', 'start_id', 'next_id');
    }
    
    public function users() {
        return $this->belongsToMany('App\\Progress', 'users_missions');
    }
}
