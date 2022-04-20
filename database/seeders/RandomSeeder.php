<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Random;
use App\Models\Breakdown;
use Illuminate\Support\Str;

class RandomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 100; $i++) {
            $random = Random::create([
                'values' =>  Str::random(10),
            ]);

            Breakdown::create([
                'values' => Str::random(10),
                'random_id' => $random->id
            ]);
        }
    }
}
