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
<<<<<<< HEAD
    Route::get('user', function(){
        $user = \App\User::select('id', 'name', 'email')->find(\Cookie::get('user_id'))->first();

        $gains = $user->player()->first()->progress()->get();
=======
    Route::get('get-user', function(){
        $user = \App\User::select('id', 'name', 'email')->where('email', \Cookie::get('user_email'))->first();

        $gains = $user->progress()->get();
>>>>>>> 6b6730d2ca4547b9d643132e6fccaeea15b27c82

        $progress = [];

        foreach($gains as $gain){
            $node_id = DB::table('users_missions')->select('node_id')->where('progress_id', $gain->id)->first()->node_id;

            array_push($progress, ['node' => \App\Node::select('id', 'dialog_file_path')->where('id', $node_id)->first()]);
        }
        
        return response()->json([
            'user' => $user,
            'current_gains' => $gains,
            'progress' => $progress
        ]);
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
    
        $children = $mission_node->nodes()->get();

        $options = [];

        foreach ($children as $child) {
            $composite_object = [
                'gains' => \App\Option::select('popularity', 'trust', 'energy', 'days', 'unlocking_trust')->where(['next_id' => $child->id], ['start_id' => $mission_node->id])
                    ->first(),
                'child' => $child
            ];
            array_push($options, $composite_object);
        }

        return response()->json([
<<<<<<< HEAD
            'node' => $mission_node,
=======
            $mission_node,
>>>>>>> 6b6730d2ca4547b9d643132e6fccaeea15b27c82
            'options' => $options
        ]);
    })->middleware('auth:api');
});