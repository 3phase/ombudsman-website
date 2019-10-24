<?php

use Illuminate\Database\Seeder;

class NodesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nodes')->insert([
            'dialog' => 'Баща ми ме бие с колана си. Трябва ми помощ!',
            'speaker' => \App\Alien::find(1)->name
        ]);

        DB::table('nodes')->insert([
            'dialog' => 'Мислех, че сънувам, очите се въртят към звездите',
        ]);

        DB::table('nodes')->insert([
            'dialog' => 'Ти: Идвам, само да си вземя бухалката от колата.',
        ]);

        DB::table('nodes')->insert([
            'dialog' => 'Бягай оттука, че ще почна и аз!',
        ]);

        //------------------------------------------------------------------

        DB::table('nodes')->insert([
            'dialog' => 'Имам проблем...',
            'speaker' => \App\Alien::find(11)->name
        ]);

        DB::table('nodes')->insert([
            'dialog' => 'Мама се дрогира с наркотик, наречен Sepiroth.',
            'speaker' => \App\Alien::find(11)->name
        ]);

        DB::table('nodes')->insert([
            'dialog' => 'Успях да проследя кой е източникът на веществото - любовникът й.',
            'speaker' => \App\Alien::find(11)->name
        ]);

        DB::table('nodes')->insert([
            'dialog' => 'Ти: Казвай къде е! Ще го вкараме в участъка и ще му извадям капачките на коленете!',
        ]);

        DB::table('nodes')->insert([
            'dialog' => 'Ти: Изпращам отряд, който ще го убие.
                Това са паразити, момче, трябва да бъдат отстранени...',
        ]);

        DB::table('nodes')->insert([
            'dialog' => 'Искам да дойда с вас... Искам да ме види преди да умре.',
            'speaker' => \App\Alien::find(11)->name
        ]);
        
        DB::table('nodes')->insert([
            'dialog' => 'Ти: Искам още малко да проучиш къде всъщност се произвеждат тези вещества.',
        ]);

        DB::table('nodes')->insert([
            'dialog' => 'Ти: Така ще знаем кой е истинският източник.',
        ]);

        DB::table('nodes')->insert([
            'dialog' => 'Добре, ще опитам...',
            'speaker' => \App\Alien::find(11)->name
        ]);

        //Дни по-късно
        
        DB::table('nodes')->insert([
            //131
            'dialog' => 'Фабриката се намира в квартал Св. Brbrbr',
            'speaker' => \App\Alien::find(11)->name
        ]);

        DB::table('nodes')->insert([
            'dialog' => 'Ти: Започваме систематично изтребление на производителите!',
        ]);

        DB::table('nodes')->insert([
            'dialog' => 'Искам да снимате труповете... Те са животни и заслужават да умрат...',
            'speaker' => \App\Alien::find(11)->name
        ]);

        DB::table('nodes')->insert([
            'dialog' => 'Ти: Ще ги заловим и ще ги накажем...',
        ]);

        DB::table('nodes')->insert([
            'dialog' => 'Ти: Изчезвай, нямам времето, нито ресурсите да се занимавам с това.',
        ]);

        DB::table('nodes')->insert([
            //181
            'dialog' => 'Никога не изкам да ви видя очите повече...',
            'speaker' => \App\Alien::find(11)->name
        ]);

        //------------------------------------------------------------------------------

        DB::table('nodes')->insert([
            //191
            'dialog' => 'Наште са сектанти.',
            'speaker' => \App\Alien::find(31)->name
        ]);

        DB::table('nodes')->insert([
            //201
            'dialog' => 'Не ми позволяват да си изразявам мислите вкъщи и ме тормозят. Трябва ми помощ...',
            'speaker' => \App\Alien::find(31)->name
        ]);

        DB::table('nodes')->insert([
            //211
            'dialog' => 'Ти: Ти нямаш ли друга работа?!? Я не ме занимавй и си ходи при изродските родители!'
        ]);

        DB::table('nodes')->insert([
            //221
            'dialog' => 'Waaah!!!',
            'speaker' => \App\Alien::find(31)->name
        ]);

        DB::table('nodes')->insert([
            //231
            'dialog' => 'Ти: Добре. Изпращам екип за разследване на сектата. Скоро твоите родители дори няма да могат да те докоснат.',
        ]);

        DB::table('nodes')->insert([
            //241
            'dialog' => 'Разчитам на вас!',
            'speaker' => \App\Alien::find(31)->name
        ]);

        DB::table('nodes')->insert([
            //251
            'dialog' => 'Ти: Отиваш в приют! Трябва да се социализираш с другите!',
        ]);

        DB::table('nodes')->insert([
            //261
            'dialog' => 'Щом така сте решили, че е правилно...',
            'speaker' => \App\Alien::find(31)->name
        ]);

        //------------------------------------------------------
    }
}
