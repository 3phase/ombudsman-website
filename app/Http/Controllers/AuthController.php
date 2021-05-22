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
        return response()->json($user->player()->first()->progress()->first(), $user->player()->first()->nickname);
    }

    public function saveProgress(Request $request){
        $progress = $request->getContent();
        $progress_object = json_decode($progress);

        $user = \App\User::find(\Cookie::get('user_id'));
        $progress = \App\Progress::where('player_id', $user->id)->first();

        if ($progress == null){
            $progress = new \App\Progress([
                'trust' => $progress_object->trust,
                'energy' => $progress_object->energy,
                'points' => $progress_object->points,
                'planet_id' => $progress_object->planet_id,
                'player_id' => $user->id]);

            $progress->save();
        }
        else{
            $progress->trust = $progress_object->trust;
            $progress->energy = $progress_object->energy;
            $progress->points = $progress_object->points;
            $progress->planet_id = $progress_object->planet_id;

            $progress->save();
        }

        return response()->json(['status'=>'saved']);
    }

    public function getAlien($id){
        return response()->json(\App\Alien::find($id));
    }

    public function getPlanet($id){
        $planet = \App\Planet::find($id);
        $aliens = \App\Alien::where(['planet_id' => $id])->select('id', 'name', 'picture_path')->get();
        unset($planet->created_at);
        unset($planet->updated_at);
        return response()->json([
            'name' => $planet->name,
            'image_filename' => $planet->image_filename,
            'background_image' => $planet->background_image,
            'aliens' => $aliens,
            'alien_coordinates' => $planet->alienCoordinates()->select('xCoord', 'yCoord')->get()]);
    }

    public function getPlanetsByPopularity($starting_popularity, $offset){
        $planets = \App\Planet::where('unlocking_popularity', '>', $starting_popularity)
            ->where('unlocking_popularity', '<', $starting_popularity + $offset)->select('id', 'image_filename', 'name')->get();

        return response()->json(['planets' => $planets]);
    }

    public function getMission($alien_id, $alien_mission_num){
        $mission = \App\Alien::find($alien_id)->missions()->skip($alien_mission_num - 1)->first();

        if ($mission != null){
            $mission = $mission->pivot;
        }
        else{
            $mission = (object) array('node_id' => -1);
        }

        return response()->json([
            'alien' => \App\Alien::find($alien_id)->name,
            'starting_node_id' => $mission->node_id,
        ]);
    }

    public function getMissionNode($node_id){

        //no unlocking days in each individual node, but rather when getting all the missions from an alien
        //unlocking_trust -> in mission node, not outside of it!
        //pivot? - should it stay or should it go?

        $mission_node = \App\Node::find($node_id);
        unset($mission_node->created_at);
        unset($mission_node->updated_at);

        $children = $mission_node->options()->get();

        $options = [];

        foreach ($children as $child) {
            unset($child->created_at);
            unset($child->updated_at);

            $composite_object = [
                'node' => ["id" => $child->id, "dialog" => \App\Option::select('dialog')->where(['next_id' => $child->id], ['start_id' => $mission_node->id]), "option_dialog" => $child->dialog, 'speaker' => $child->speaker, "pivot" => $child->pivot, 'gains' => \App\Option::select('trust', 'enrgy')->where(['next_id' => $child->id], ['start_id' => $mission_node->id])
                ->first(), 'unlocking_trust' => \App\Node::select('unlocking_trust')->where(['id' => $child->id])->first()->unlocking_trust]
            ];

            array_push($options, $composite_object);
        }

        return response()->json([
            'current_node' => $mission_node,
            'options' => $options
        ]);
    }

    public function getMissionNodes(Request $request){
        $nodeIds = $request->input('node_ids');

        $mission_nodes = \App\Node::whereIn('id', array_map('intval', explode(',', $nodeIds)))->get();

        return $mission_nodes;
    }
}
