<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            "cars" => Car::inRandomOrder()->take(5)->get()
        ]);
    }
}
