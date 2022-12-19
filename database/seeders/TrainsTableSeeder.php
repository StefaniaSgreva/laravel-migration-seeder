<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// use App\Models\Train; ->MODEL se volessi importare i dati da un db interno
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
        //ESEMIPO SE VOLESSI POPOLARLO DA UN DB IN config (2s 'dataseeder)

        // $trains = config('dataseeder.trains');
        // dd($trains);
        // foreach ($trains as $train) {
        //     $newtrain = new Train();
        //     $newtrain->agency = $train['agency'];
        //     $newtrain->departure_station = $train['departure_station'];
        //     $newtrain->arrival_station = $train['arrival_station'];
        //     $newtrain->departure_time = $train['departure_time'];
        //     $newtrain->train_code = $train['train_code'];
        //     $newtrain->carriages_number = $train['carriages_number'];
        //     $newtrain->on_time = $train['on_time'];
        //     $newtrain->cancelled = $train['cancelled'];

        //     $newtrain->save();
        // }
        for ($i = 0; $i < 10; $i++) {
            $newtrain = new Train();
            $newtrain->agency = $faker->company();
            $newtrain->departure_station = $faker->city();
            $newtrain->arrival_station = $faker->city();
            $newtrain->departure_time = $faker->time();
            $newtrain->arrival_time = $faker->time();
            $newtrain->train_code = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $newtrain->carriages_number = $faker->randomDigit();
            $newtrain->on_time = $faker->boolean();
            $newtrain->cancelled = $faker->boolean();

            $newtrain->save();
        }
    }
}