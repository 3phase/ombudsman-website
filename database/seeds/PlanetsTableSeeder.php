<?php

use Illuminate\Database\Seeder;

class PlanetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planets')->insert([
            'name' => 'Root35E2',
            'image_filename' => 'planet1.jpg',
            'level' => 1,
            'unlocking_popularity' => 0,
        ]);
        
        DB::table('planets')->insert([
            'name' => 'El',
            'image_filename' => 'planet2.jpg',
            'level' => 3,
            'unlocking_popularity' => 100 
        ]);

        DB::table('planets')->insert([
            'name' => 'Esteban',
            'image_filename' => 'planet3.jpg',
            'level' => 2,
            'unlocking_popularity' => 5 
        ]);
    }
}
