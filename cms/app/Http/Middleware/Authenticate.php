<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function handle($request, Closure $next)
    {  
        // dd(Auth::user()->role()->get()[0]->role != "admin");
        // dd("Is there a specific role for the shit: ".(Auth::user()->role()->get()->count() == 0).", and is it admin:  ".(Auth::user()->role()->get()[0]->role != "admin"));
        // dd(Auth::user()->role()->get()->count() == 0 or Auth::user()->role()->get()[0]->role != "admin");
        if(is_null(Auth::user()) or Auth::user()->role()->get()->count() == 0 or Auth::user()->role()->get()[0]->role != "admin"){
            // dd("Here");
            Auth::logout();
            return redirect()->route('login')->with(['message' => "Not authenticated!"]);
        }
        return $next($request);
    }
}
