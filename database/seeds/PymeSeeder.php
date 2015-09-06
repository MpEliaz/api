<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PymeSeeder extends Seeder
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
            \DB::table('pymes')->insert(array(
                'nombre' => $faker->name,
                'telefono' => $faker->phoneNumber,
                'direccion' => $faker->address,
                'email' => $faker->email,
                'url_imagen' => $faker->url,
                'descripcion_corta' => $faker->sentence($nbWords = 6),
                'descripcion_larga' => $faker->sentence($nbWords = 20),
                'estado' => true,
                'comuna_id' => $faker->numberBetween($min = 1, $max = 10)

            ));
        }
    }
}
