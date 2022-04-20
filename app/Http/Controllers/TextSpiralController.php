<?php

namespace App\Http\Controllers;

use App\Models\Random;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Breakdown;
// use App\Models\Random;

use Illuminate\Http\Request;

class TextSpiralController extends Controller
{
    public function index()
    {
        return Random::with('breakdown')->get();
    }
}
