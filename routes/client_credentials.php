<?php

use Illuminate\Http\Request;

Route::middleware('web', 'json.response')->group(function() {
    Route::post('login', 'AuthController@login')->name('auth');
    Route::get('getUser', function(){
        echo(Cookie::get('session_id'));
        return response()->json(["user" => \App\User::find(\Session::get('user_id'))]);
    });
});