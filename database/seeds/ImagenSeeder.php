<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ImagenSeeder extends Seeder
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
            \DB::table('imagenes')->insert(array(
                'nombre' => $faker->name,
                'url' => $faker->url,
                'descripcion' => $faker->sentence($nbWords = 6)
            ));
        }
    }
}
