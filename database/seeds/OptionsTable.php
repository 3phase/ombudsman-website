<?php

use Illuminate\Database\Seeder;

class OptionsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
            'start_id' => 1,
            'next_id' => 11,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 11,
            'next_id' => 21,
            'popularity' => 2,
            'trust' => 1,
            'energy' => -2,
            'days' => 0,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 11,
            'next_id' => 31,
            'popularity' => 2,
            'trust' => -1,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 41,
            'next_id' => 51,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 51,
            'next_id' => 61,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 61,
            'next_id' => 71,
            'popularity' => 2,
            'trust' => -1,
            'energy' => -1,
            'days' => 2,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 61,
            'next_id' => 81,
            'popularity' => 10,
            'trust' => -3,
            'energy' => -3,
            'days' => 1,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 81,
            'next_id' => 91,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 101,
            'next_id' => 111,
            'popularity' => 4,
            'trust' => 2,
            'energy' => -1,
            'days' => 1,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 111,
            'next_id' => 121,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 121,
            'next_id' => 131,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 131,
            'next_id' => 141,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 4,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 141,
            'next_id' => 151,
            'popularity' => 10,
            'trust' => -5,
            'energy' => 3,
            'days' => 1,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 141,
            'next_id' => 161,
            'popularity' => 3,
            'trust' => 3,
            'energy' => 2,
            'days' => 3,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 121,
            'next_id' => 171,
            'popularity' => -2,
            'trust' => -3,
            'energy' => 0,
            'days' => 3,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 171,
            'next_id' => 181,
            'popularity' => 0,
            'trust' => -1,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => 0
        ]);
    }
}
