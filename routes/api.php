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
    Route::post('login', 'AuthController@login')->name('auth')->middleware('cors');

    Route::get('user', function(){
        $user = \App\User::select('id', 'name', 'email')->find(\Cookie::get('user_id'));

        $gains = $user->player()->first()->progress()->get();

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
    })->middleware('auth:api', 'cors');

    Route::get('progress', function(){
        $user = \App\User::find(\Cookie::get('user_id'));
        return response()->json($user->player()->first()->progress()->first());
    })->middleware('auth:api', 'cors');

    Route::get('alien/{id}', function($id){
        return response()->json(\App\Alien::find($id));
    })->middleware('auth:api', 'cors');
    
    Route::get('planet/{id}', function($id){
        return response()->json(\App\Planet::find($id));
    })->middleware('auth:api', 'cors');
    
    Route::get('/alien/{alien_id}/mission/{alien_mission_num}', function($alien_id, $alien_mission_num){
        $mission = \App\Alien::find($alien_id)->missions()->skip($alien_mission_num - 1)->first();
        return response()->json([
            'alien' => \App\Alien::find($alien_id)->name,
            'starting_node_id' => $mission->pivot->node_id,
        ]);
    })->middleware('auth:api', 'cors');
    
    Route::get('mission_node/{node_id}', function($node_id){
        $mission_node = \App\Node::find($node_id);
        unset($mission_node->created_at);
        unset($mission_node->updated_at);
    
        $children = $mission_node->options()->get();

        $options = [];

        foreach ($children as $child) {
            unset($child->created_at);
            unset($child->updated_at);
            $composite_object = [
                'gains' => \App\Option::select('popularity', 'trust', 'energy', 'days', 'unlocking_trust')->where(['next_id' => $child->id], ['start_id' => $mission_node->id])
                    ->first(),
                'node' => $child
            ];

            array_push($options, $composite_object);
        }

        return response()->json([
            'current_node' => $mission_node,
            'options' => $options
        ]);
    })->middleware('auth:api', 'cors');
});