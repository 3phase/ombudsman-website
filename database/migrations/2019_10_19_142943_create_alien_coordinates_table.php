<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlienCoordinatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alien_coordinates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('xCoord', 5, 4);
            $table->double('yCoord', 5, 4);
            $table->bigInteger('planet_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AlienCoordinates');
    }
}
