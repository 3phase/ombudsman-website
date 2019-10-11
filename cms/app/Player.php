<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function user(){
        return $this->belongsTo('App\\User');
    }
    
    public function progress(){
        return $this->hasOne('App\\Progress');
    }
}
