<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NodesTable::class);
        $this->call(OptionsTable::class);
        $this->call(AliensTableSeeder::class);
        $this->call(PlanetsTableSeeder::class);
        $this->call(AliensMissionsTable::class);
    }
}
