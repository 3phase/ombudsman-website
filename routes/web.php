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
    return response()->json(["user" => \App\User::find(\Session::get('user_id'))]);
});

Route::get('aliens/{id}', function($id){
    return response()->json(['alien' => \App\Alien::find($id)]);
});

Route::get('planet/{id}', function($id){
    return response()->json(['planet' => \App\Planet::find($id)]);
});

Route::get('planet/{planet_id}/alien/{alien_id}/mission/{node_id}', function($planet_id, $alien_id, $node_id){
    $mission = \App\Alien::find($alien_id)->missions()->where(['node_id' => $node_id])->first();

    function mapCriteria($object){
        return $object->id;
    }
    
    return response()->json([
        'planet' => \App\Planet::find($planet_id),
        'alien' => \App\Alien::find($alien_id),
        'starting_node_id' => $mission,
        'options' => array_map("mapCriteria", \App\Node::find($mission)->nodes()->get())
    ]);
});
