<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Brand;

class CarController extends Controller
{
    public function index(Request $request)
    {

        $brands = Brand::all();
        $selectedBrandId = $request->query('brand_id');
        $sortBy = $request->query('sortBy');

        $carsQuery = Car::query();

        if ($selectedBrandId) {
            $carsQuery->where('brand_id', $selectedBrandId);
        } else {
            // Jika $selectedBrandId tidak ada, query akan mengambil semua brand
            $brands = Brand::all();
        }

        if ($sortBy == 'alphabet') {
            $carsQuery->orderBy('name', 'asc');
        } elseif ($sortBy == 'latest') {
            $carsQuery->latest();
        }

        $cars = $carsQuery->get();

        return view('cars', compact('cars', 'brands', 'selectedBrandId', 'sortBy'));
    }


    public function show(Car $car)
    {
        return view('car', [
            "car" => $car,
        ]);
    }
}
