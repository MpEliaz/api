<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i <10; $i++)
        {
            \DB::table('eventos')->insert(array(
                'nombre' => $faker->name,
                'descripcion' => $faker->sentence($nbWords = 6),
                'direccion' => $faker->address,
                'precio' => $faker->numberBetween($min = 1000, $max = 15000),
                'fecha' => $faker->dateTime($max = 'now'),
                'url_imagen' => $faker->url,
                'id_comuna' => $faker->numberBetween($min = 1, $max = 10)
                /*'telefono' => $faker->phoneNumber,
                'email' => $faker->email,
                'estado' => true,
                */

            ));
        }
    }
}
