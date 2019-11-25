<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlienController extends Controller
{
    public function index($planet_id)
    {
        $planet = \App\Planet::find($planet_id);
        return view('cms.alien.index', ['aliens' => $planet->aliens, 'planet' => $planet]);
    }

    public function add($planet_id, Request $request ){
        $new_alien = new \App\Alien;
        $new_alien->name = $request->name;
        $new_alien->planet_id = $planet_id;
        $new_alien->picture_path = "No pictures available at the moment!";
        $new_alien->save();
        return back()->with("success", "Успешно добавихте извънземно!");
    }

    public function edit($planet_id, $alien_id){
        $alien = \App\Alien::find($alien_id);
        return view('cms.alien.edit', ["alien" => $alien, 'planet' => $alien->planet]);
    }

    public function store($planet_id, Request $request, $alien_id)
    {
        $alien = \App\Alien::find($alien_id);
        $name = $request->input('name');
        if(!is_null($name)){
            $alien->name = $name;
        }
        $alien->save();

        return back()->with("success", "Успешно редактирахте извънземното!");
    }

    public function delete($planet_id, $alien_id){
        \App\Alien::destroy($alien_id);
        return back()->with("success", "Успешно изтрихте извънземното!");
    }
}