<?php

use Illuminate\Database\Seeder;

class AliensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Alien::create([
            'name' => 'e',
            'picture_path' => 'e',
            'planet_id' => 1
        ]);

        \App\Alien::create([
            'name' => 'Saiya',
            'picture_path' => 'Saiya',
            'planet_id' => 1
        ]);

        \App\Alien::create([
            'name' => 'Innard',
            'picture_path' => 'Innard',
            'planet_id' => 1
        ]);

        \App\Alien::create([
            'name' => 'Djikstra',
            'picture_path' => 'Djikstra',
            'planet_id' => 11
        ]);

        \App\Alien::create([
            'name' => 'Praso',
            'picture_path' => 'Praso',
            'planet_id' => 11
        ]);
    }
}
