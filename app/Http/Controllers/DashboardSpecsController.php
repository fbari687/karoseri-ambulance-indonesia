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
        return view('dashboard.specs.index', [
            'title' => 'specs',
            'specs' => Spec::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.specs.create', [
            'title' => 'Specs',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'body' => 'required'
        ]);

        Spec::create([
            'name' => strtoupper($request->input('name')),
            'body' => $request->input('body')
        ]);

        return redirect('/admin/dashboard/specs')->with('success', 'Menambah Spesifikasi');
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
        return view('dashboard.specs.edit', [
            'spec' => $spec,
            'title' => 'Specs'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spec $spec)
    {
        $request->validate([
            'name' => 'required|max:255',
            'body' => 'required'
        ]);

        Spec::where('id', $spec->id)->update([
            'name' => strtoupper($request->input('name')),
            'body' => $request->input('body')
        ]);

        return redirect('/admin/dashboard/specs')->with('success', 'Mengubah Spesifikasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spec $spec)
    {
        Spec::destroy($spec->id);
        return redirect('/admin/dashboard/specs')->with('success', 'Menghapus Spesifikasi');
    }
}
