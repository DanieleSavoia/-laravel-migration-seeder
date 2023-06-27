<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'agency' => 'Trenitalia',
                'departure_station' => 'Salerno',
                'departure_station' => 'Napoli',
                'departure_time' => '2023-06-27 20:06:31',
                'arrival_time' => '2023-06-27 20:06:31',
                'train_code' => 'SROMADKA',
                'number_of_carriages' => '8',
                'in_time' => True,
                'deleted' => True,
            ],
            [
                'agency' => 'Trenitalia',
                'departure_station' => 'Montecosaro',
                'departure_station' => 'Brindisi',
                'departure_time' => '2023-06-27 20:06:31',
                'arrival_time' => '2023-06-27 20:06:31',
                'train_code' => 'DELRLDGA',
                'number_of_carriages' => '12',
                'in_time' => false,
                'deleted' => True,
            ],
        ];

        foreach ($trains as $arrTrain) {
            Train::create($arrTrain);
        }
    }
}
