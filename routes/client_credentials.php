<?php

use Illuminate\Http\Request;

Route::middleware('web', 'json.response')->group(function() {
    Route::post('login', 'AuthController@login')->name('auth');
    Route::get('getUser', function(){
        echo(Cookie::get('session_id'));
        return response()->json(["user" => \App\User::find(\Session::get('user_id'))]);
    });
    Route::get('get-user', function(){
        return response()->json([\Cookie::get('user_email')]);
    })->middleware('auth:api');
    
    Route::get('alien/{id}', function($id){
        return response()->json(['name' => \App\Alien::find($id)->name]);
    })->middleware('auth:api');
    
    Route::get('planet/{id}', function($id){
        return response()->json(['name' => \App\Planet::find($id)->name, 'level' => \App\Planet::find($id)->level, 'reachable_population' => \App\Planet::find($id)->reachable_population]);
    })->middleware('auth:api');
    
    Route::get('planet/{planet_id}/alien/{alien_id}/mission/{mission_id}', function($planet_id, $alien_id, $mission_id){
        $mission = \App\Alien::find($alien_id)->missions()->skip($mission_id - 1)->first();
        
        return response()->json([
            'planet' => \App\Planet::find($planet_id)->name,
            'alien' => \App\Alien::find($alien_id)->name,
            'starting_node_id' => $mission->pivot->node_id,
        ]);
    })->middleware('auth:api');
    
    Route::get('mission_node/{node_id}', function($node_id){
        $mission_node = \App\Node::find($node_id);
    
        return response()->json([
            $mission_node,
            'options' => $mission_node->nodes()->get()
        ]);
    })->middleware('auth:api');
});