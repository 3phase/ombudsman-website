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
<<<<<<< HEAD
            'unlocking_popularity' => 0
=======
            'reachable_popularity' => 0
>>>>>>> 6b6730d2ca4547b9d643132e6fccaeea15b27c82
        ]);

        Db::table('aliens_missions')->insert([
            'alien_id' => 11,
            'node_id' => 41,
<<<<<<< HEAD
            'unlocking_popularity' => 1
=======
            'reachable_popularity' => 1
>>>>>>> 6b6730d2ca4547b9d643132e6fccaeea15b27c82
        ]);
    }
}
