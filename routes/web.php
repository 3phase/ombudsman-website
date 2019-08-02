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