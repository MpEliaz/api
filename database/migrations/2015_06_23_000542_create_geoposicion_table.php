<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeoposicionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geolocation', function (Blueprint $table) {
            $table->increments('id');
            $table->double('lat');
            $table->double('lng');
            $table->string('descripcion');
            $table->integer('id_pyme')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('id_pyme')->references('id')->on('pymes');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("geolocation");
    }
}
