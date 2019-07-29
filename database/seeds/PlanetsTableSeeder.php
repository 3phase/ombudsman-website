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
            'level' => 1,
            'reachable_population' => 0 
        ]);
        
        DB::table('planets')->insert([
            'name' => 'El',
            'level' => 3,
            'reachable_population' => 100 
        ]);

        DB::table('planets')->insert([
            'name' => 'Esteban',
            'level' => 2,
            'reachable_population' => 5 
        ]);
    }
}
