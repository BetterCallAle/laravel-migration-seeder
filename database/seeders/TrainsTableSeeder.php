<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        for ($i=0; $i < 20 ; $i++) { 
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();  
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('-1 day', '+1 day');
            $newTrain->arrival_time = $faker->dateTimeBetween('now', '+1 day');
            $newTrain->train_code = $faker->bothify('??? ###');
            $newTrain->total_carriages_num = $faker->numberBetween(3, 15);
            $newTrain->in_time = $faker->numberBetween(0, 1);
            $newTrain->cancelled= $faker->numberBetween(0,1);
            $newTrain->save();
        }
    }
}
