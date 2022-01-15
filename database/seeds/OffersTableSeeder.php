<?php

use Illuminate\Database\Seeder;
use App\Offers;
use Faker\Generator as faker; 

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15 ; $i++) { 
            $newOffers = new Offers();
            $newOffers->title = $faker->sentence();
            $newOffers->coverImgPath = $faker->imageUrl();
            $newOffers->content=$faker->realText();
            $newOffers->save();
        }
        //
    }
}
