<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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
        $id = $request->session()->get('id', 'No such key my friend!');
        Log::info("Found id is: ".$id);

        if ($user != null) {


            if (Hash::check($request->input('password'), $user->password)){                
                $session = new \Session;
                // $session->save();
                // Log::info("Created id is: ".$session->getId());
                // session(["sessionId" => $session->getId()]);
                
                Log::info("Session id is: ".session("sessionId"));

                \Cookie::put('session_id', $request->session()->getId());
                \Cookie::put('user_email', $user->email);

                return view('welcome', ['name'=> $user->email]);
            }
        }
        return view('login', ['message' => 'Invalid username or password']);
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