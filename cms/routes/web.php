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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware("auth:api")->name('home');

// CMS 

Route::middleware('auth')->group(function () {
    
    Route::get('/cms', 'PlanetController@index')->name('planets');
    Route::get('/cms/planet/{planet_id}', 'PlanetController@edit');
    Route::post('/cms/planet/{planet_id}', 'PlanetController@store');
    Route::delete('cms/planet/{planet_id}', 'PlanetController@delete');

    Route::get('/cms/planet/{planet_id}/aliens', 'AlienController@index');
    Route::get('/cms/planet/{planet_id}/alien/{alien_id}', 'AlienController@edit');
    Route::post('/cms/planet/{planet_id}/alien/{alien_id}', 'AlienController@store');
    Route::delete('cms/planet/{planet_id}/alien/{alien_id}', 'AlienController@delete');


    Route::get('/cms/planet/{planet_id}/aliens/{alien_id}/missions', 'MissionController@index');

    // Route::get('cms/planet', function(){return view('');});
    
});

// CMS