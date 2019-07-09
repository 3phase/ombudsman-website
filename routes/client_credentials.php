<?php

use Illuminate\Http\Request;

Route::middleware('web', 'json.response')->group(function() {
    Route::post('login', 'AuthController@login');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/', function (Request $request) {
    return 'Plain text. Just for fun...'; 
});