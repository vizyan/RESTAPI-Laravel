<?php

use Illuminate\Database\Seeder;
use App\Car;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Car::truncate();

        $faker = \Faker\Factory::create();

        for($i = 0; $i < 50; $i++){
            Car::create([
                'make' => $faker->sentence,
                'model' => $faker->sentence,
                'year' => $faker->sentence,
            ]);
        }
    }
}
