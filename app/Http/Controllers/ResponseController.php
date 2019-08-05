<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public static function respond(Request $request, $statusCode, $message, $redirectRoute = null){
        if($request->wantsJson()){
            return response()->json(['message' => $message], $statusCode);
        }
        if($redirectRoute === null){
            throw new Exception('Redirect route not provided when response is not in API!');
        }
        return redirect()->route($redirectRoute)->with(['message' => $message]);
    }
}
