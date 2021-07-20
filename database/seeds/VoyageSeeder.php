<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Voyage;

class VoyageSeeder extends Seeder
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
            $newTrip = new Voyage();
            $newTrip->country = $faker->country;
            $newTrip->hotel = $faker->name;
            $newTrip->stars = $faker->randomDigitNot(0, 8, 9);
            $newTrip->image = $faker->imageUrl(640, 480, 'beaches', true);
            $newTrip->duration = $faker->randomDigitNotNull();
            $newTrip->price = $faker->randomFloat(2, 599, 2999);
            $newTrip->save();
        }
    }
}
