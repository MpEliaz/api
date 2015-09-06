<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function(Blueprint $table){
           $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('direccion');
            $table->integer('precio');
            $table->dateTime('fecha');
            $table->string('url_imagen');
            $table->integer('id_comuna')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('id_comuna')->references('id')->on('comunas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("eventos");
    }
}
