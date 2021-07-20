<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trip;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i=0; $i < 10; $i++) { 
            # code...
            $newTrip = new Trip();
            $newTrip->country = $faker->country;
            $newTrip->hotel = $faker->name;
            $newTrip->stars = $faker->randomDigitNotNull();
            $newTrip->save();
        }
    }
}
