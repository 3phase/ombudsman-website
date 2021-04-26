<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Options extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->bigInteger('start_id');
            $table->bigInteger('next_id');
            $table->bigInteger('popularity');
            $table->bigInteger('trust');
            $table->bigInteger('energy');
            $table->bigInteger('days');
            $table->bigInteger('unlocking_trust'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schemas::drop('options');
    }
}
