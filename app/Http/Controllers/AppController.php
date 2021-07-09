<?php

namespace App\Http\Controllers;

use App\Meal;
use Illuminate\Http\Request;
use App\Todo;

class AppController extends Controller
{
    public function welcome()
    {
        return view('welcome', [
            'meals' => Meal::paginate(9)
            // 'meals' => Meal::inRandomOrder()->limit(9)->get()
        ]);
    }
}
