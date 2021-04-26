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
            'dialog' => 'Мислех, че сънувам, очите се въртят към звездите',
            'trust' => 0,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'start_id' => 1,
            'next_id' => 11,
            'dialog' => 'Ти: Идвам, само да си вземя бухалката от колата.',
            'trust' => 1,
            'energy' => -2,
        ]);

        DB::table('options')->insert([
            'start_id' => 1,
            'next_id' => 11,
            'dialog' => 'Бягай оттука, че ще почна и аз!',
            'trust' => -1,
            'energy' => 0
        ]);

        DB::table('options')->insert([
            'start_id' => 21,
            'next_id' => 31,
            'trust' => 0,
            'energy' => 0,
        ]);
        
        DB::table('options')->insert([
            'start_id' => 31,
            'next_id' => 41,
            'trust' => 0,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'dialog' => 'Ти: Изпращам отряд, който ще го убие.
                Това са паразити, момче, трябва да бъдат отстранени...',
            'start_id' => 41,
            'next_id' => 51,
            'trust' => 0,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'dialog' => 'Ти: Искам още малко да проучиш къде всъщност се произвеждат тези вещества.',
            'start_id' => 41,
            'next_id' => 61,
            'trust' => 0,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'start_id' => 61,
            'next_id' => 71,
            'trust' => -1,
            'energy' => -1,
        ]);

        DB::table('options')->insert([
            'start_id' => 71,
            'next_id' => 81,
            'trust' => -3,
            'energy' => -3,
        ]);

        DB::table('options')->insert([
            'start_id' => 81,
            'next_id' => 91,
            'dialog' => 'Ти: Започваме систематично изтребление на производителите!',
            'trust' => -3,
            'energy' => -3,
        ]);

        DB::table('options')->insert([
            'start_id' => 81,
            'next_id' => 101,
            'dialog' => 'Ти: Ще ги заловим и ще ги накажем...',
            'trust' => -3,
            'energy' => -3,
        ]);

        DB::table('options')->insert([
            'start_id' => 81,
            'next_id' => 101,
            'dialog' => 'Ти: Изчезвай, нямам времето, нито ресурсите да се занимавам с теб.',
            'trust' => 0,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'start_id' => 111,
            'next_id' => 121,
            'trust' => 2,
            'energy' => -1,
        ]);

        DB::table('options')->insert([
            'start_id' => 121,
            'next_id' => 131,
            'dialog' => 'Ти: Ти нямаш ли друга работа?!? Я не ме занимавй и си ходи при изродските родители!',
            'trust' => -2,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'start_id' => 121,
            'next_id' => 141,
            'dialog' => 'Ти: Добре. Изпращам екип за разследване на сектата. Скоро твоите родители дори няма да могат да те докоснат.',
            'trust' => 1,
            'energy' => -1,
        ]);

        DB::table('options')->insert([
            'start_id' => 121,
            'next_id' => 151,
            'dialog' => 'Ти: Отиваш в приют! Трябва да се социализираш с другите!',
            'trust' => -3,
            'energy' => -3,
        ]);

        DB::table('options')->insert([
            'start_id' => 141,
            'next_id' => 151,
            'trust' => -5,
            'energy' => 3,
        ]);

        DB::table('options')->insert([
            'start_id' => 141,
            'next_id' => 161,
            'trust' => 3,
            'energy' => 2,
        ]);

        DB::table('options')->insert([
            'start_id' => 61,
            'next_id' => 171,
            'trust' => -3,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'start_id' => 171,
            'next_id' => 181,
            'trust' => -1,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'start_id' => 191,
            'next_id' => 201,
            'trust' => -1,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'start_id' => 201,
            'next_id' => 211,
            'trust' => -1,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'start_id' => 211,
            'next_id' => 221,
            'trust' => -1,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'start_id' => 201,
            'next_id' => 231,
            'trust' => -1,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'start_id' => 231,
            'next_id' => 241,
            'trust' => -1,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'start_id' => 201,
            'next_id' => 251,
            'trust' => -1,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'start_id' => 251,
            'next_id' => 261,
            'trust' => -1,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'start_id' => 271,
            'next_id' => 281,
            'trust' => -1,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'start_id' => 281,
            'next_id' => 291,
            'trust' => -20,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'start_id' => 291,
            'next_id' => 301,
            'trust' => -1,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'start_id' => 281,
            'next_id' => 311,
            'trust' => 18,
            'energy' => -2,
        ]);

        DB::table('options')->insert([
            'start_id' => 311,
            'next_id' => 321,
            'trust' => 0,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'start_id' => 321,
            'next_id' => 331,
            'trust' => 0,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'start_id' => 331,
            'next_id' => 341,
            'trust' => 0,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'start_id' => 341,
            'next_id' => 351,
            'trust' => 0,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'start_id' => 351,
            'next_id' => 361,
            'trust' => 0,
            'energy' => 0,
        ]);

        DB::table('options')->insert([
            'start_id' => 361,
            'next_id' => 371,
            'trust' => 0,
            'energy' => 0,
        ]);
    }
}
