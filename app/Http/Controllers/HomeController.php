<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Carousel;
use App\Models\Portfolio;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            "carousels" => Carousel::latest()->get(),
            "cars" => Car::inRandomOrder()->take(5)->get(),
            "portfolios" => Portfolio::latest()->take(7)->get(),
        ]);
    }
}
