<?php

use Illuminate\Database\Seeder;

class TipoPymeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tipo_pyme')->insert(array('nombre' => 'Hoteles'));
        \DB::table('tipo_pyme')->insert(array('nombre' => 'Hospedajes'));
        \DB::table('tipo_pyme')->insert(array('nombre' => 'Trekking'));
        \DB::table('tipo_pyme')->insert(array('nombre' => 'Paseos'));
        \DB::table('tipo_pyme')->insert(array('nombre' => 'Cabalgatas'));
    }
}
