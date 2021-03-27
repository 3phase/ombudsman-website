<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\ResponseController as ResponseController;

class CmsAuthenticate 
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
        // dd('In CMS auth middleware!');
        // dd(!$request->cookie('is_admin'));
        if(!$request->cookie('is_admin')){
            return ResponseController::respond($request, 401, 'Not an admin!', 'admin');
        }
        return $next($request);
    }
}
