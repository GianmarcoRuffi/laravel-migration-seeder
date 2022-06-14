<?php

use Illuminate\Database\Seeder;
use \Faker\Generator as Faker;
use App\TravelPackage;

class TravelPackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i =0; $i < 50; $i++){
            $newPackage= new TravelPackage();
            $newPackage->hotel = $faker->company();
            $newPackage->votes = $faker->numberBetween (0, 10);
            $newPackage->city = $faker->city();
            $newPackage->address = $faker->streetAddress();
            $newPackage->description = $faker->paragraph(5, true);
            $newPackage->price = $faker->randomFloat(2, 2000, 3000);
            $newPackage->image = $faker->imageUrl(360, 360, 'house', true);
            $newPackage->save();
        }
    }
}
