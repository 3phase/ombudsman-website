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
            ], 403);
        }
        
        $token = $user->createToken('utoken')->accessToken;
        return response([
            'token' => $token
        ], 200);
    }

    public function getProgress(){
        $user = \App\User::find(\Cookie::get('user_id'));
        return response()->json($user->player()->first()->progress()->first());
    }

    public function getAlien($id){
        return response()->json(\App\Alien::find($id));
    }

    public function getPlanet($id){
        $planet = \App\Planet::find($id);
        $aliens = \App\Alien::where('alien_id', $id);
        unset($planet->created_at);
        unset($planet->updated_at);
        return response()->json($planet->name, $aliens);
    }
}
