<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {

        return view('cars', [
            "cars" => Car::with('brand', 'specs')->get()
        ]);
    }

    public function home()
    {
        return view('home', [
            "cars" => Car::inRandomOrder()->take(5)->get()
        ]);
    }

    public function show(Car $car)
    {
        return view('car', [
            "car" => $car,
        ]);
    }
}
