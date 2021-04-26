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
            'speaker' => \App\Alien::find(1)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        DB::table('nodes')->insert([
            'dialog' => 'Мерси!',
            'speaker' => \App\Alien::find(1)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        //------------------------------------------------------------------

        DB::table('nodes')->insert([
            // 21
            'dialog' => 'Имам проблем...',
            'speaker' => \App\Alien::find(11)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        DB::table('nodes')->insert([
            // 31
            'dialog' => 'Мама се дрогира с наркотик, наречен Olipel.',
            'speaker' => \App\Alien::find(11)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        DB::table('nodes')->insert([
            // 41
            'dialog' => 'Успях да проследя кой е източникът на веществото - любовникът й.',
            'speaker' => \App\Alien::find(11)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        DB::table('nodes')->insert([
            // 51
            'dialog' => 'Искам да дойда с вас... Искам да ме види преди да умре.',
            'speaker' => \App\Alien::find(11)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        DB::table('nodes')->insert([
            // 61
            'dialog' => 'Ти: Така ще знаем кой е истинският източник.',
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        DB::table('nodes')->insert([
            // 71
            'dialog' => 'Добре, ще опитам...',
            'speaker' => \App\Alien::find(11)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        //Дни по-късно
        
        DB::table('nodes')->insert([
            //81
            'dialog' => 'Фабриката се намира в квартал Св. Brbrbr',
            'speaker' => \App\Alien::find(11)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        DB::table('nodes')->insert([
            //91
            'dialog' => 'Искам да снимате труповете... Те са животни и заслужават да умрат...',
            'speaker' => \App\Alien::find(11)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        DB::table('nodes')->insert([
            //101
            'dialog' => 'Никога не изкам да ви видя очите повече...',
            'speaker' => \App\Alien::find(11)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        //------------------------------------------------------------------------------

        DB::table('nodes')->insert([
            //111
            'dialog' => 'Наште са сектанти.',
            'speaker' => \App\Alien::find(31)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        DB::table('nodes')->insert([
            //121
            'dialog' => 'Не ми позволяват да си изразявам мислите вкъщи и ме тормозят. Трябва ми помощ...',
            'speaker' => \App\Alien::find(31)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        DB::table('nodes')->insert([
            //131
            'dialog' => 'Waaah!!!',
            'speaker' => \App\Alien::find(31)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        DB::table('nodes')->insert([
            //141
            'dialog' => 'Разчитам на вас!',
            'speaker' => \App\Alien::find(31)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        DB::table('nodes')->insert([
            //151
            'dialog' => 'Щом така сте решили, че е правилно...',
            'speaker' => \App\Alien::find(31)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        //------------------------------------------------------

        DB::table('nodes')->insert([
            //161
            'dialog' => 'Няма разбиране в този свят!',
            'speaker' => \App\Alien::find(41)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        DB::table('nodes')->insert([
            //171
            'dialog' => 'Има ли начин да споделя чувства с някого? С вас, може би?',
            'speaker' => \App\Alien::find(41)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        DB::table('nodes')->insert([
            'dialog' => 'Ти: Не! Нямам време за това!',
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        DB::table('nodes')->insert([
            //181
            'dialog' => 'Вие сте чудовище!!!',
            'speaker' => \App\Alien::find(41)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        DB::table('nodes')->insert([
            //201
            'dialog' => 'Ти: Разкажи ми, съкровище...',
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        DB::table('nodes')->insert([
            //211
            'dialog' => 'Благодаря много!',
            'speaker' => \App\Alien::find(41)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        DB::table('nodes')->insert([
            //221
            'dialog' => 'Преди две години се опитах да избягам от фермата на баба ми...',
            'speaker' => \App\Alien::find(41)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        DB::table('nodes')->insert([
            //341
            'dialog' => 'Планът беше да се скрия в калта и да изчакам, докато не помисли, че съм избягал и след това реално да избягам!',
            'speaker' => \App\Alien::find(41)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        DB::table('nodes')->insert([
            //351
            'dialog' => 'Тя обаче ме намери. Бях си приготвил малко острие и когато ме доближи, я прободох в гърлото!',
            'speaker' => \App\Alien::find(41)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);

        DB::table('nodes')->insert([
            //361
            'dialog' => 'Умря в агония и остана там, в калта. Никой не знае за нейното изчезване, освен нас двамата...',
            'speaker' => \App\Alien::find(41)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);
        
        DB::table('nodes')->insert([
            //371
            'dialog' => 'Благодаря за изслушването!',
            'speaker' => \App\Alien::find(41)->name,
            'unlocking_trust' => -3000,
            'unlocking_days' => 1
        ]);
    }
}
