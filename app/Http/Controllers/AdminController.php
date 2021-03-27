<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Show the application admin login to access the cms.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function login(Request $request)
    {
        $params = $request->only('email', 'password');
        if(Auth::attempt($params)){
           
            if(Auth::user()->role()){
                if(Auth::user()->role()->first()->role === 'admin'){
                    \Cookie::queue(cookie('session_id', $request->session()->getId()));
                    \Cookie::queue(cookie('user_id', Auth::user()->id));
                    \Cookie::queue(cookie('is_admin', true));                    
                    return ResponseController::respond($request, 200, 'You are now admin', 'cms');
                }
            }
        }
        return redirect('admin')->with('message', 'Invalid username or password!');
    }

    public function cms(){
        return view('cms.index');
    }
    
}
