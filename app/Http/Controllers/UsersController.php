<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ResponseController as ResponseController;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function login(Request $request){
        $params = $request->only('email', 'password');
        if(Auth::attempt($params)){
            Log::info('User with email '.$request->email.' is now authenticated!');
            \Cookie::queue(cookie('session_id', $request->session()->getId()));
            \Cookie::queue(cookie('user_id', Auth::user()->id));

            return ResponseController::respond($request, 200, 'Welcome '.$request->email.'!', 'index');
        }

        return redirect()->route('login')->with(['message' => 'Invalid username or password!']);
    }

    public function logout(Request $request){
        Auth::logout();
        \Cookie::queue(\Cookie::forget('user_id'));
        \Cookie::queue(\Cookie::forget('session_id'));
        return redirect()->route('index')->with(['message' => 'Singed out successfully!']);
    }

    public function register(Request $request){
        $user = new \App\User;
        $isValid = $request->validate([
            'email' => 'required|unique:users|min:3',
            'name' => 'nullable|min:3',
            'password' => 'required|min:3'
        ]);

        $user->name = $request->input('email');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'), ['rounds' => 12]);

        $user->save();

        return redirect()->route('login')->with(['message' => 'Register successful! :)']);
    }
}