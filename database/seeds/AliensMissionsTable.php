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
            'unlocking_popularity' => 0
        ]);

        Db::table('aliens_missions')->insert([
            'alien_id' => 11,
            'node_id' => 41,
            'unlocking_popularity' => 1
        ]);
    }
}
