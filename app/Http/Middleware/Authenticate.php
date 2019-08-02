<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

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
        if($request->cookie('session_id')){
            return $next($request);
        }else{
            if($request->wantsJson()){
                return [
                    'statusCode' => 403,
                    'message' => 'Not authenticated!'
                ];
            }
            Log::info('Not authenticated!');
            
            return redirect()->route('login')->with('message', 'Not authenticated');
        }
    }
}
