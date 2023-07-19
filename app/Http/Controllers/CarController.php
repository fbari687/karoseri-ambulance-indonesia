<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Brand;

class CarController extends Controller
{
    public function index()
    {

        return view('cars', [
            "cars" => Car::with('brand')->get(),
            "brands" => Brand::with('cars')->orderBy('name', 'asc')->get()
        ]);
    }


    public function show(Car $car)
    {
        return view('car', [
            "car" => $car,
        ]);
    }
}
