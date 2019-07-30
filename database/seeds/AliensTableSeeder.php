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
        DB::table('aliens')->insert([
            'name' => 'e',
            'picture_path' => 'is there a meaning or purpose in this life?'
        ]);

        DB::table('aliens')->insert([
            'name' => 'Saiya',
            'picture_path' => 'is there a meaning or purpose in this life?'
        ]);

        DB::table('aliens')->insert([
            'name' => 'Innard',
            'picture_path' => 'is there a meaning or purpose in this life?'
        ]);
    }
}
