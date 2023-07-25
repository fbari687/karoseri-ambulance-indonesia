<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DashboardCarouselsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.carousels.index', [
            "title" => "Carousels",
            "carousels" => Carousel::oldest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.carousels.create', [
            "title" => "Carousels"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'image|file|max:2048'
        ]);

        Carousel::create([
            'image' => $request->file('image')->store('carousel-image')
        ]);

        return redirect('/admin/dashboard/carousels')->with('success', 'Menambah Foto Carousel');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carousel $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carousel $carousel)
    {
        return view('dashboard.carousels.edit', [
            "title" => 'Carousel',
            'carousel' => $carousel
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carousel $carousel)
    {
        $rules = [
            'image' => 'image|file|max:2048'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('carousel-image');
        }

        Carousel::where('id', $carousel->id)->update($validatedData);
        return redirect('/admin/dashboard/carousels')->with('success', 'Mengedit Carousel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carousel $carousel)
    {
        if ($carousel->image) {
            Storage::delete($carousel->image);
        }
        Carousel::destroy($carousel->id);
        return redirect('/admin/dashboard/carousels')->with('success', 'Carousel Berhasil dihapus!');
    }
}
