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
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 11,
            'next_id' => 21,
            'popularity' => 2,
            'trust' => 1,
            'energy' => -2,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 11,
            'next_id' => 31,
            'popularity' => 2,
            'trust' => -1,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 41,
            'next_id' => 51,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 51,
            'next_id' => 61,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 61,
            'next_id' => 71,
            'popularity' => 2,
            'trust' => -1,
            'energy' => -1,
            'days' => 2,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 61,
            'next_id' => 81,
            'popularity' => 10,
            'trust' => -3,
            'energy' => -3,
            'days' => 1,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 61,
            'next_id' => 101,
            'popularity' => 10,
            'trust' => -3,
            'energy' => -3,
            'days' => 1,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 81,
            'next_id' => 91,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 101,
            'next_id' => 111,
            'popularity' => 4,
            'trust' => 2,
            'energy' => -1,
            'days' => 1,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 111,
            'next_id' => 121,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 121,
            'next_id' => 131,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 131,
            'next_id' => 141,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 4,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 131,
            'next_id' => 161,
            'popularity' => 10,
            'trust' => -3,
            'energy' => -3,
            'days' => 1,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 141,
            'next_id' => 151,
            'popularity' => 10,
            'trust' => -5,
            'energy' => 3,
            'days' => 1,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 141,
            'next_id' => 161,
            'popularity' => 3,
            'trust' => 3,
            'energy' => 2,
            'days' => 3,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 61,
            'next_id' => 171,
            'popularity' => -2,
            'trust' => -3,
            'energy' => 0,
            'days' => 3,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 171,
            'next_id' => 181,
            'popularity' => 0,
            'trust' => -1,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 191,
            'next_id' => 201,
            'popularity' => 0,
            'trust' => -1,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 201,
            'next_id' => 211,
            'popularity' => 0,
            'trust' => -1,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 211,
            'next_id' => 221,
            'popularity' => 0,
            'trust' => -1,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 201,
            'next_id' => 231,
            'popularity' => 0,
            'trust' => -1,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 231,
            'next_id' => 241,
            'popularity' => 0,
            'trust' => -1,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 201,
            'next_id' => 251,
            'popularity' => 0,
            'trust' => -1,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 251,
            'next_id' => 261,
            'popularity' => 0,
            'trust' => -1,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 271,
            'next_id' => 281,
            'popularity' => 0,
            'trust' => -1,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 281,
            'next_id' => 291,
            'popularity' => 0,
            'trust' => -20,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 291,
            'next_id' => 301,
            'popularity' => -1,
            'trust' => -1,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 281,
            'next_id' => 311,
            'popularity' => 1,
            'trust' => 18,
            'energy' => -2,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 311,
            'next_id' => 321,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 321,
            'next_id' => 331,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 331,
            'next_id' => 341,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 341,
            'next_id' => 351,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 351,
            'next_id' => 361,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);

        DB::table('options')->insert([
            'start_id' => 361,
            'next_id' => 371,
            'popularity' => 0,
            'trust' => 0,
            'energy' => 0,
            'days' => 0,
            'unlocking_trust' => -3000
        ]);
    }
}
