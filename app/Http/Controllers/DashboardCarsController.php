<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;
use App\Models\Spec;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class DashboardCarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.cars.index', [
            'title' => 'Models',
            "cars" => Car::with('brand', 'specs')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.cars.create', [
            'title' => 'Model',
            'brands' => Brand::orderBy('name', 'asc')->get(),
            'specs' => Spec::orderBy('name', 'asc')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'name' => 'required|string|max:255',
            'slug' => 'required|unique:cars,slug|max:255',
            'image' => 'image|file|max:2048',
            'specs' => 'array',
            'specs.*' => 'exists:specs,id'
        ]);

        $car = Car::create([
            'brand_id' => $request->input('brand_id'),
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'image' => $request->file('image')->store('product-image')
        ]);

        if ($request->has('specs')) {
            $specs = $request->input('specs');
            $car->specs()->attach($specs);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Car::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
