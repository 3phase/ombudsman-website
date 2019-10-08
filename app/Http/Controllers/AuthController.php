<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        $user = \App\User::where('email', $request->input('email'))->first();
        if ($user == null) {
            return response([
                'message' => 'Unauthenticated'
            ], 403);
        }
        
        $token = $user->createToken('utoken')->accessToken;
        return response([
            'token' => $token
        ], 200);
    }

    public function getProgress(){
        $user = \App\User::find(\Cookie::get('user_id'));
        return response()->json($user->player()->first()->progress()->first());
    }

    public function getAlien($id){
        return response()->json(\App\Alien::find($id));
    }

    public function getPlanet($id){
        $planet = \App\Planet::find($id);
        $aliens = \App\Alien::where('alien_id', $id);
        unset($planet->created_at);
        unset($planet->updated_at);
        return response()->json($planet->name, $aliens);
    }

    public function getPlanetByPopularity($starting_popularity, $offset){
        $planets = \App\Planet::where('unlocking_popularity', '>', $starting_popularity)
            ->where('unlocking_popularity', '<', $starting_popularity + $offset)->get();

        return response()->json(['planets' => $planets]);
    }

    public function getMission($alien_id, $alien_mission_num){
        $mission = \App\Alien::find($alien_id)->missions()->skip($alien_mission_num - 1)->first();
        return response()->json([
            'alien' => \App\Alien::find($alien_id)->name,
            'starting_node_id' => $mission->pivot->node_id,
        ]);
    }

    public function getMissionNode($node_id){
        $mission_node = \App\Node::find($node_id);
    
        $children = $mission_node->options()->get();

        $options = [];

        foreach ($children as $child) {
            $composite_object = [
                'gains' => \App\Option::select('popularity', 'trust', 'energy', 'days', 'unlocking_trust')->where(['next_id' => $child->id], ['start_id' => $mission_node->id])
                    ->first(),
                'node' => $child
            ];
            array_push($options, $composite_object);
        }

        return response()->json([
            'current_node' => $mission_node,
            'options' => $options
        ]);
    }

    public function getMissionNodes(){
        $nodeIds = $request->input('node_ids');
       
       $mission_nodes = Node::whereIn('id', $nodeIds)->get();

       return $mission_nodes;
    }
}
