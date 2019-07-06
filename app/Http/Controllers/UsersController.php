<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $user = \App\User::where('email', $request->input('email'))->first();

        if ($user != null) {
            if (Hash::check($request->input('password'), $user->password)){
                $request->session()->put('user_id', $user->id);
                return view('welcome', ['name'=> $user->email]);
            }
        }

        return view('login', ['message' => 'Invalid username or password']);
    }

    public function register(Request $request){
        $user = new \App\User;

        $user->name = '';

        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'), ['rounds' => 12]);

        $user->save();

        return redirect('login', ['message' => 'Now login! :)']);
    }
}