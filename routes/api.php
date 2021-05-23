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
    Route::get('user', 'AuthController@getUser')->middleware('auth:api');
    Route::get('progress', 'AuthController@getProgress')->middleware('auth:api');
    Route::get('alien/{id}', 'AuthController@getAlien')->middleware('auth:api');
    Route::get('planet/{id}', 'AuthController@getPlanet')->middleware('auth:api');
    Route::get('planets/between/{starting_popularity}/{offset}', 'AuthController@getPlanetsByPopularity')->middleware('auth:api');
    Route::get('/alien/{alien_id}/mission/{alien_mission_num}', 'AuthController@getMission')->middleware('auth:api');
    Route::get('mission_node/{node_id}', 'AuthController@getMissionNode')->middleware('auth:api');
    Route::get('mission_nodes/', 'AuthController@getMissionNodes')->middleware('auth:api');
    Route::get('alien/{alien_id}/missions', 'AuthController@getAlienMissions')->middleware('auth:api');
    Route::post('/save_progress', 'AuthController@saveProgress')->name('auth:api');
});
