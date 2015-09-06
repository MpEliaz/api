<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('categorias')->insert(array('nombre' => '¿Que Hacer?'));
        \DB::table('categorias')->insert(array('nombre' => '¿Donde Dormir?'));
        \DB::table('categorias')->insert(array('nombre' => '¿Donde Comer?'));
        \DB::table('categorias')->insert(array('nombre' => 'Servicios'));

    }
}
