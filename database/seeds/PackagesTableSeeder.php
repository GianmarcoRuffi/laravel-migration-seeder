<?php

use Illuminate\Database\Seeder;
use \Faker\Generator as Faker;
use App\Home;

class PackagesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $this->call(UsersTableSeeder::class);

 for ($i =0; $i < 50; $i++){
        $newPackage= new Home();

        $newPackage->hotel = $faker->company();
        $newPackage->votes = $faker->numberBetween (0, 10);
        $newPackage->city = $faker->city();
        $newPackage->address = $faker->streetAddress();
        $newPackage->description = $faker->paragraph(5, true);
        $newPackage->price = $faker->randomFloat(2, 2000, 30000);
        $newPackage->image = $faker->imageUrl(360, 360, 'house', true);

        $newPackage->save();
 }

    }
}
