<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
             $newTrain = new Train ();
             $newTrain->code_train = $faker->randomNumber(4, true);
             $newTrain->platform = $faker->numberBetween(1, 24);
             $newTrain->departure_time = $faker->time();
             $newTrain->departure = $faker->city();
             $newTrain->arrival_time = $faker->time();
             $newTrain->arrival = $faker->city();
             $newTrain->status = $faker->randomElement(['in orario', 'in ritardo', 'soppresso']);
             $newTrain->save();
        }

    }
}
