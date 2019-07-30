<?php

use Illuminate\Database\Seeder;

class AliensMissionsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aliens_missions')->insert([
            'alien_id' => 1,
            'node_id' => 1,
            'reachable_popularity' => 0
        ]);

        Db::table('aliens_missions')->insert([
            'alien_id' => 11,
            'node_id' => 51,
            'reachable_popularity' => 1
        ]);
    }
}
