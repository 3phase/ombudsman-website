<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ResponseController as ResponseController;

class Authenticate 
{
    /**
     * Handle incoming requests.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure $next
     * @return  mixed
     */
    public function handle($request, Closure $next)
    {
        // if(!$request->cookie('session_id')){
        //     Log::info($request->path().' requested from an unauthenticated user!');
        //     return ResponseController::respond($request, 401, 'Not authenticated!', 'login');
        // }
        return $next($request);
    }
}
