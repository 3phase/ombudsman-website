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
            
        ]);
    }
}
