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
            'next_id' => 2,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 2,
            'next_id' => 3,
            'popularity' => 2,
            'trust' => 1,
            'energy' => -2,
            'days' => 0,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 2,
            'next_id' => 4,
            'popularity' => 2,
            'trust' => -1,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 5,
            'next_id' => 6,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 6,
            'next_id' => 7  ,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 7,
            'next_id' => 8,
            'popularity' => 2,
            'trust' => -1,
            'energy' => -1,
            'days' => 2,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 7,
            'next_id' => 9,
            'popularity' => 10,
            'trust' => -3,
            'energy' => -3,
            'days' => 1,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 9,
            'next_id' => 10,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 11,
            'next_id' => 12,
            'popularity' => 4,
            'trust' => 2,
            'energy' => -1,
            'days' => 1,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 12,
            'next_id' => 13,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 13,
            'next_id' => 14,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 14,
            'next_id' => 15,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 4,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 15,
            'next_id' => 16,
            'popularity' => 10,
            'trust' => -5,
            'energy' => 3,
            'days' => 1,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 13,
            'next_id' => 17,
            'popularity' => 3,
            'trust' => 3,
            'energy' => 2,
            'days' => 3,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 13,
            'next_id' => 18,
            'popularity' => -2,
            'trust' => -3,
            'energy' => 0,
            'days' => 3,
            'unlocking_trust' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 18,
            'next_id' => 19,
            'popularity' => 0,
            'trust' => -1,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => 0
        ]);
    }
}
