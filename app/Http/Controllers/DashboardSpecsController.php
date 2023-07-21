<?php

namespace App\Http\Controllers;

use App\Models\Spec;
use Illuminate\Http\Request;

class DashboardSpecsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.specs', [
            'title' => 'specs',
            'specs' => Spec::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Spec $spec)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Spec $spec)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spec $spec)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spec $spec)
    {
        //
    }
}
