<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::middleware(['basicAuth'])->get('/', function() {
//     return "Autenticiran si, boy!";
// })->name('successfulAuth');

Route::post('/register', 'UsersController@register');

Route::post('/login', 'UsersController@login')->middleware('client_credentials');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function(){
    return view('login');
})->name('login', ['message' => '']);

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('getUser', function(){
    return response()->json(["user" => \Cookie::get('user_email')]);
})->middleware('auth:api');

Route::get('alien/{id}', function($id){
    return response()->json(['alien' => \App\Alien::find($id)]);
})->middleware('auth:api');

Route::get('planet/{id}', function($id){
    return response()->json(['planet' => \App\Planet::find($id)]);
})->middleware('auth:api');

Route::get('planet/{planet_id}/alien/{alien_id}/mission/{mission_id}', function($planet_id, $alien_id, $mission_id){
    $mission = \App\Alien::find($alien_id)->missions()->skip($mission_id - 1)->first();
    
    return response()->json([
        'planet' => \App\Planet::find($planet_id),
        'alien' => \App\Alien::find($alien_id),
        'starting_node_id' => $mission->pivot->node_id,
        // 'options' => \App\Node::find($mission)->first()->nodes()->get()
    ]);
})->middleware('auth:api');

Route::get('mission_node/{node_id}', function($node_id){
    $mission_node = \App\Node::find($node_id);

    return response()->json([
        'current_node' => $mission_node,
        'options' => $mission_node->nodes()->get()
    ]);
})->middleware('auth:api');