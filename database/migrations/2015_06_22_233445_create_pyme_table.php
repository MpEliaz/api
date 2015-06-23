<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePymeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pymes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('email')->unique();
            $table->string('url_imagen');
            $table->string('descripcion_corta');
            $table->string('descripcion_larga');
            $table->integer('estado');
            $table->integer('comuna_id')->unsigned()->nullable();
            $table->integer('usuario_id')->unsigned()->nullable();
            $table->integer('tipo_pyme_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('comuna_id')->references('id')->on('comunas');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('tipo_pyme_id')->references('id')->on('tipo_pyme');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pymes');
    }
}
