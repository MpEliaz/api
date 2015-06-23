<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePymeImagenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pyme_imagen', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pyme_id')->unsigned()->index();
            $table->foreign('pyme_id')->references('id')->on('pymes')->onDelete('cascade');

            $table->integer('imagen_id')->unsigned()->index();
            $table->foreign('imagen_id')->references('id')->on('imagenes')->onDelete('cascade');
            $table->integer('tipo_imagen')->nullable();
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
        Schema::drop('pyme_imagen');
    }
}
