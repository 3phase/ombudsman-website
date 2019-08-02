<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

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
        // $user = \App\User::where('email', $request->input('email'))->first();
        // $id = $request->session()->get('id', 'No such key my friend!');
        // Log::info("Found id is: ".$id);

        // if ($user != null) {

        //     if (Hash::check($request->input('password'), $user->password)){                
        //         // $session = new \Session;
        //         // // $session->save();
        //         // // Log::info("Created id is: ".$session->getId());
        //         // // session(["sessionId" => $session->getId()]);  
        //         Log::info("Session id is: ".$request->session()->getId());
        //         Log::info("Session id is: ".$user->id);

        //         \Cookie::queue(cookie('session_id', $request->session()->getId()));
        //         \Cookie::queue(cookie('user_id', $user->id));
        //         // $response = new \Illuminate\Http\Response(view('welcome', ['name' => $user->email]));
        //         // $response->withCookie(('cookieName' , 'cookieValue' , expire));
        //         // return $response;
        //         return view('welcome', ['name'=> $user->email]);
        //     }
        // }
        $params = $request->only('email', 'password');
        if(Auth::attempt($params)){
            Log::info('User with email '.$request->email.' is now authenticated!');
            \Cookie::queue(cookie('session_id', $request->session()->getId()));
            \Cookie::queue(cookie('user_id', Auth::user()->id));
            Log::info(\Request::getRequestUri());
            return redirect()->intended('/')->with(['message' => 'Welcome '.$request->email.'!']);
        }
        return redirect()->route('login')->with(['message' => 'Invalid username or password']);
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