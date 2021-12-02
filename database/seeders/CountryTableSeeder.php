<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        
        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Country::create([
                'name' => $faker->name,
                'code_iso2' => $faker->code_iso2,
                'code_iso3' => $faker->code_iso3,
                'currency' => 'XOF',
            ]);
        }
    }
}
