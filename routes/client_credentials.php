<?php

use Illuminate\Http\Request;

Route::middleware('web', 'json.response')->group(function() {
    Route::post('login', 'AuthController@login');
});