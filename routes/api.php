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
    
    Route::get('/alien/{alien_id}/mission/{mission_id}', function($alien_id, $mission_id){
        $mission = \App\Alien::find($alien_id)->missions()->skip($mission_id - 1)->first();
        
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