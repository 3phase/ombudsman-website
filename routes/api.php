<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('web', 'json.response')->group(function() {
    Route::post('login', 'AuthController@login')->name('auth');

    Route::get('user', function(){
        return response()->json(\App\User::find(\Cookie::get('user_id')));
    })->middleware('auth');
        
    Route::get('player', function(){
        $user = \App\User::find(\Cookie::get('user_id'));
        return response()->json($user->player()->first());
    })->middleware('auth:api');

    Route::get('progress', function(){
        $user = \App\User::find(\Cookie::get('user_id'));
        return response()->json($user->player()->first()->progress()->first());
    })->middleware('auth:api');

    Route::get('alien/{id}', function($id){
        return response()->json(\App\Alien::find($id)->first());
    })->middleware('auth:api');
    
    Route::get('planet/{id}', function($id){
        return response()->json(\App\Planet::find($id)->first());
    })->middleware('auth:api');
    
    Route::get('/alien/{alien_id}/mission/{alien_mission_num}', function($alien_id, $mission_id){
        $mission = \App\Alien::find($alien_id)->missions()->skip($alien_mission_num - 1)->first();
        return response()->json([
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