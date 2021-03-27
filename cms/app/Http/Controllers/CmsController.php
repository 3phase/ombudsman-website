<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function index()
    {
        $planets = \App\Planet::all();
        return view('cms.cms', ['planets' => $planets]);
    }

    public function add_planet(Request $request){
        $new_planet = new \App\Planet($request->name, $request->level);
        dd($new_planet);
        $new_planet->save();
        return redirect('planets')->with("success", "Successfully created new planet!");
    }

    public function edit_planet(Request $request, $planet_id)
    {
        $planet = \App\Planet::find($planet_id);
        $name = $request->input('name');
        $level = $request->input('level');
        if(!is_null($name)){
            $planet->name = $name;
        }
        if(!is_null($level)){
            $planet->level = $level;
        }
        $planet->save();

        return back()->with("success", "Successfully edited the planet!");
    }

    public function delete_planet($planet_id){
        \App\Planet::destroy($planet_id);
        return back()->with("success", "Successfully deleted planet!");
    }
}
