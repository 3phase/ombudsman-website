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
            'dialog_file_path' => 'Баща ми ме бие с колана си. Трябва ми помощ!',
        ]);

        DB::table('nodes')->insert([
            'dialog_file_path' => 'Мислех, че сънувам, очите се въртят към звездите',
        ]);

        DB::table('nodes')->insert([
            'dialog_file_path' => 'Ти: Идвам, само да си вземя бухалката от колата.',
        ]);

        DB::table('nodes')->insert([
            'dialog_file_path' => 'Бягай оттука, че ще почна и аз!',
        ]);

        //------------------------------------------------------------------

        DB::table('nodes')->insert([
            'dialog_file_path' => 'Имам проблем...',
        ]);

        DB::table('nodes')->insert([
            'dialog_file_path' => 'Мама се дрогира с наркотик, наречен Sepiroth.',
        ]);

        DB::table('nodes')->insert([
            'dialog_file_path' => 'Успях да проследя кой е източникът на веществото - любовникът й.',
        ]);

        DB::table('nodes')->insert([
            'dialog_file_path' => 'Ти: Казвай къде е! Ще го вкараме в участъка и ще му извадям капачките на коленете!',
        ]);

        DB::table('nodes')->insert([
            'dialog_file_path' => 'Ти: Изпращам отряд, който ще го убие. Това са паразити, момче, трябва да бъдат отстранени...',
        ]);

        DB::table('nodes')->insert([
            'dialog_file_path' => 'Искам да дойда с вас... Искам да ме види преди да умре.',
        ]);

        DB::table('nodes')->insert([
            //101
            'dialog_file_path' => 'Ти: Искам още малко да проучиш къде всъщност се произвеждат тези вещества.',
        ]);

        DB::table('nodes')->insert([
            'dialog_file_path' => 'Ти: Така ще знаем кой е истинският източник.',
        ]);

        DB::table('nodes')->insert([
            'dialog_file_path' => 'Добре, ще опитам...',
        ]);

        //Дни по-късно
        
        DB::table('nodes')->insert([
            //131
            'dialog_file_path' => 'Фабриката се намира в квартал Св. Brbrbr',
        ]);

        DB::table('nodes')->insert([
            'dialog_file_path' => 'Ти: Започваме систематично изтребление на производителите!',
        ]);

        DB::table('nodes')->insert([
            'dialog_file_path' => 'Искам да снимате труповете... Те са животни и заслужават да умрат...',
        ]);

        DB::table('nodes')->insert([
            'dialog_file_path' => 'Ти: Ще ги заловим и ще ги накажем...',
        ]);

        DB::table('nodes')->insert([
            'dialog_file_path' => 'Ти: Изчезвай, нямам времето, нито ресурсите да се занимавам с това.',
        ]);

        DB::table('nodes')->insert([
            'dialog_file_path' => 'Никога не изкам да ви видя очите повече...',
        ]);

        //------------------------------------------------------------------------------
    }
}
