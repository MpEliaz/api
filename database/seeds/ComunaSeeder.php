<?php

use Illuminate\Database\Seeder;

class ComunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('comunas')->insert(array('nombre' => 'Ancud'));
        \DB::table('comunas')->insert(array('nombre' => 'Castro'));
        \DB::table('comunas')->insert(array('nombre' => 'Chonchi'));
        \DB::table('comunas')->insert(array('nombre' => 'Curaco de Vélez'));
        \DB::table('comunas')->insert(array('nombre' => 'Dalcahue'));
        \DB::table('comunas')->insert(array('nombre' => 'Puqueldón'));
        \DB::table('comunas')->insert(array('nombre' => 'Queilén'));
        \DB::table('comunas')->insert(array('nombre' => 'Quemchi'));
        \DB::table('comunas')->insert(array('nombre' => 'Quellón'));
        \DB::table('comunas')->insert(array('nombre' => 'Quinchao'));
    }
}
