<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class DashboardBrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.brands.index', [
            'title' => 'brands',
            'brands' => Brand::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.brands.create', [
            'title' => 'Merk'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        Brand::create($validatedData);
        return redirect('/admin/dashboard/brands')->with('success', 'Menambahkan Merk Baru');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('dashboard.brands.edit', [
            'title' => 'Merk',
            'brand' => $brand
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        Brand::where('id', $brand->id)
            ->update($validatedData);

        return redirect('/admin/dashboard/brands')->with('success', 'MengEdit Brand');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        Brand::destroy($brand->id);
        return redirect('/admin/dashboard/brands')->with('success', 'Menghapus Merk');
    }
}
