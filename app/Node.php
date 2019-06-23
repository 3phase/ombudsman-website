<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    public function aliens(){
        return $this->belongsToMany('App\\Alien', 'aliens_nodes');
    }

    public function nodes(){
        return $this->belongsToMany('App\\Node', 'options', 'start_id', 'next_id');
    }
}
