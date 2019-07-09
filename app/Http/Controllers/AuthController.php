<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        $user = \App\User::where('email', $request->input('email'))->first();
        if ($user == null) {
            return response([
                'message' => 'Unauthenticated'
            ], 200);
        }
        
        $token = $user->createToken('utoken')->accessToken;
        return response([
            'token' => $token
        ], 200);
    }
}
