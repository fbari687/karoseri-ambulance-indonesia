<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Carousel;
use App\Models\Portfolio;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            "carousels" => Carousel::latest()->get(),
            "cars" => Car::inRandomOrder()->take(5)->get(),
            "portfolios" => Portfolio::latest()->take(8)->get(),
            "contacts" => Contact::with('socmed')->oldest()->get()
        ]);
    }
}
