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
            'picture_path' => 'e.jpg',
            'planet_id' => 1
        ]);

        \App\Alien::create([
            'name' => 'Saiya',
            'picture_path' => 'Saiya.jpg',
            'planet_id' => 1
        ]);

        \App\Alien::create([
            'name' => 'Innard',
            'picture_path' => 'Innard.jpg',
            'planet_id' => 1
        ]);
    }
}
