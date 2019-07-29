<?php

use Illuminate\Database\Seeder;

class AliensPlanetsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aliens_planets')->insert([
            'alien_id' => 1,
            'planet_id' => 1
        ]);

        DB::table('aliens_planets')->insert([
            'alien_id' => 2,
            'planet_id' => 2
        ]);
        
        DB::table('aliens_planets')->insert([
            'alien_id' => 3,
            'planet_id' => 3
        ]);
    }
}
