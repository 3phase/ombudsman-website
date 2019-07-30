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
            'reachable_population' => 0
        ]);

        Db::table('aliens_missions')->insert([
            'alien_id' => 2,
            'node_id' => 5,
            'reachable_population' => 1
        ]);
    }
}
