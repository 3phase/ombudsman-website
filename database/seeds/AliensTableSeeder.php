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
            'picture_path' => 'is there a meaning or purpose in this life?',
            'planet_id' => 1
        ]);

        \App\Alien::create([
            'name' => 'Saiya',
            'picture_path' => 'is there a meaning or purpose in this life?',
            'planet_id' => 1
        ]);

        \App\Alien::create([
            'name' => 'Innard',
            'picture_path' => 'is there a meaning or purpose in this life?',
            'planet_id' => 1
        ]);

        // DB::table('aliens')->insert([
        //     'name' => 'e',
        //     'picture_path' => 'is there a meaning or purpose in this life?'
        // ]);

        // DB::table('aliens')->insert([
        //     'name' => 'Saiya',
        //     'picture_path' => 'is there a meaning or purpose in this life?'
        // ]);

        // DB::table('aliens')->insert([
        //     'name' => 'Innard',
        //     'picture_path' => 'is there a meaning or purpose in this life?'
        // ]);
    }
}
