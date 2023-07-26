<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DashboardPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.portfolios.index', [
            'title' => 'portfolios',
            'portfolios' => Portfolio::oldest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.portfolios.create', [
            'title' => 'portfolios',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'images' => 'required',
            'images.*' => 'image|file|max:2048'
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('portfolio-image');

                $portfolio = new Portfolio();
                $portfolio->image = $imagePath;
                $portfolio->save();
            }
        }

        return redirect('/admin/dashboard/portfolios')->with('success', "Mengupload Gambar Portfolio");
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->image) {
            Storage::delete($portfolio->image);
        }
        Portfolio::destroy($portfolio->id);
        return redirect('/admin/dashboard/portfolios')->with('success', 'Portfolio Berhasil dihapus!');
    }
}
