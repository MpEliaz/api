<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('usuarios')->insert(array(
            'nombre' 	=> 'Elias Enoc',
            'email' => 'elias@elias.cl',
            'password' => \Hash::make('123'),
            'rol' => 'admin'
        ));
    }
}
