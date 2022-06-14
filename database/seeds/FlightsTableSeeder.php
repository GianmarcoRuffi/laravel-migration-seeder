<?php

use Illuminate\Database\Seeder;
use \Faker\Generator as Faker;
use App\Flight;

class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i =0; $i < 10; $i++){
            $newPackage= new Flight();
            $newPackage->destination = $faker->city();
            $newPackage->ticketprice = $faker->randomFloat(2, 2000, 3000);
            $newPackage->save();
        }
    }
}
