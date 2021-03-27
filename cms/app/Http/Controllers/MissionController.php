<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MissionController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($planet_id, $alien_id)
    {
        dd(\App\Alien::find($alien_id)->missions);
        return view('cms.mission.index');
    }
}
