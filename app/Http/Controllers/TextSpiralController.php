<?php

namespace App\Http\Controllers;

use App\Models\Breakdown;
use App\Models\Random;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class TextSpiralController extends Controller
{
    public function index()
    {

        $iterationArray = [5, 6, 7, 8, 9, 10];

        $iterations = collect($iterationArray)->random();

        Random::truncate();
        Breakdown::truncate();

        for ($i = 0; $i < $iterations; $i++) {
            $random = Random::create([
                'values' =>  Str::random(10),
            ]);

            for ($x = 0; $x < $iterations; $x++) {
                Breakdown::create([
                    'values' => Str::random(10),
                    'random_id' => $random->id
                ]);
            }
        }

        return Random::with('breakdown')->get();
    }
}
