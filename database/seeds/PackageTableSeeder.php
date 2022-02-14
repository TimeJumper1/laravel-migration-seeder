<?php

use Illuminate\Database\Seeder;
use App\Package;
use Faker\Generator as Faker;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i = 0; $i < 10; $i++) {
            $new_package = new Package();
            $new_package->price = rand(500, 10000);
            $new_package->duration_day = rand(1, 14);
            $new_package->name = $faker->name();
            $new_package->location = $faker->city();
            $new_package->description = $faker->text();
            $new_package->save();

        }
    }
}
