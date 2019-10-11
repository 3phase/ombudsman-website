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
    
    Route::get('/cms', 'CmsController@index')->name('planets');
    
    Route::get('/cms/planet/{planet_id}/aliens', function ($planet_id) {
        $planet = \App\Planet::find($planet_id);
        $aliens = $planet->aliens;
        return view('cms.aliens', ['aliens' => $aliens, 'planet' => $planet]);
    });

    Route::get('/cms/planet/{planet_id}', function($planet_id){
        $planet = \App\Planet::find($planet_id);
        return view('cms.edit_planet', ['planet' => $planet]);
    });

    Route::post('/cms/planet/{planet_id}', 'CmsController@edit_planet');
    Route::delete('cms/planet/{planet_id', 'CmsController@delete_planet');
    
    // Route::post('/thing', 'CmsController@thing');
    
});

// CMS