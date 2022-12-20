<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableCsvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allData = Helpers::getDataFromCsv(__DIR__ . '/trains.csv');
        foreach ($allData as $key => $data) {
            if($key !== 0){
                $newTrain = new Train();
                $newTrain->company = $data[0];
                $newTrain->departure_station = $data[1];
                $newTrain->arrival_station = $data[2];
                $newTrain->departure_time = $data[3];
                $newTrain->arrival_time = $data[4];
                $newTrain->train_code = $data[5];
                $newTrain->total_carriages_num = $data[6];
                $newTrain->in_time = $data[7];
                $newTrain->cancelled = $data[8];
                $newTrain->save();
            }
        }
    }
}
