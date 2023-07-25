<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;
use App\Models\Spec;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'name' => ucwords($request->input('name')),
            'slug' => $request->input('slug'),
            'image' => $request->file('image')->store('product-image')
        ]);

        if ($request->has('specs')) {
            $specs = $request->input('specs');
            $car->specs()->attach($specs);
        }

        return redirect('/admin/dashboard/cars')->with('success', 'Menambah Model Mobil');
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
        return view('dashboard.cars.edit', [
            'title' => 'Models',
            'car' => $car,
            'brands' => Brand::orderBy('name', 'asc')->get(),
            'specs' => Spec::orderBy('name', 'asc')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $rules = [
            'brand_id' => 'required|exists:brands,id',
            'image' => 'image|file|max:2048',
            'specs' => 'array',
            'specs.*' => 'exists:specs,id'
        ];

        if ($request->slug != $car->slug) {
            $rules['slug'] = 'required|unique:cars,slug';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file("image")->store('product-image');
        }

        $validatedData['name'] = ucwords($request->name);

        if ($request->slug != $car->slug && Car::where('slug', $request->slug)->exists()) {
            return back()->withErrors(['slug' => 'The slug has already been taken.']);
        }

        $car->fill($validatedData);
        $car->save();

        if ($request->has('specs')) {
            $specs = $request->specs;
            $car->specs()->sync($specs);
        } else {
            $car->specs()->detach();
        }

        return redirect('/admin/dashboard/cars')->with('success', 'Mengubah Model');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        if ($car->image) {
            Storage::delete($car->image);
        }

        $car = Car::findOrFail($car->id);
        $car->delete();
        return redirect('/admin/dashboard/cars')->with('success', 'Menghapus Model Mobil');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Car::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
