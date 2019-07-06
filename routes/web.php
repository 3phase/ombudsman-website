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

Route::middleware(['basicAuth'])->get('/', function() {
    return "Autenticiran si, boy!";
})->name('successfulAuth');

Route::get('/', function () {
    return 'Nah..';
})->name('azkaban');