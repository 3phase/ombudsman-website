<?php

use Illuminate\Database\Seeder;

class AlienCoordinatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\AlienCoordinates::create([
            'xCoord' => 0.5000,
            'yCoord' => 0.5000,
            'planet_id' => 1
        ]);

        \App\AlienCoordinates::create([
            'xCoord' => 0.1320,
            'yCoord' => 0.4280,
            'planet_id' => 1
        ]);

        \App\AlienCoordinates::create([
            'xCoord' => 0.8000,
            'yCoord' => 0.6000,
            'planet_id' => 1
        ]);

        \App\AlienCoordinates::create([
            'xCoord' => 0.5000,
            'yCoord' => 0.5000,
            'planet_id' => 2
        ]);

        \App\AlienCoordinates::create([
            'xCoord' => 0.1320,
            'yCoord' => 0.4280,
            'planet_id' => 2
        ]);

        \App\AlienCoordinates::create([
            'xCoord' => 0.8000,
            'yCoord' => 0.6000,
            'planet_id' => 2
        ]);

        \App\AlienCoordinates::create([
            'xCoord' => 0.5000,
            'yCoord' => 0.5000,
            'planet_id' => 3
        ]);

        \App\AlienCoordinates::create([
            'xCoord' => 0.1320,
            'yCoord' => 0.4280,
            'planet_id' => 3
        ]);

        \App\AlienCoordinates::create([
            'xCoord' => 0.8000,
            'yCoord' => 0.6000,
            'planet_id' => 3
        ]);
    }
}
