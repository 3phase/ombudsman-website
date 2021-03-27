<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = \App\Planet::all();
        return view('cms.planet.index', ['planets' => $planets]);
    }

    public function edit($planet_id){
        return view('cms.planet.edit', ["planet" => \App\Planet::find($planet_id)]);
    }

    public function store(Request $request, $planet_id)
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

    public function delete($planet_id){
        \App\Planet::destroy($planet_id);
        return back()->with("success", "Successfully deleted planet!");
    }
}