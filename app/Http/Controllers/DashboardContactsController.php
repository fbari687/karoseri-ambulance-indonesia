<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Socmed;
use Illuminate\Http\Request;

class DashboardContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.contacts.index', [
            "title" => "Contacts",
            "contacts" => Contact::oldest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.contacts.create', [
            "title" => "Contact",
            "socmeds" => Socmed::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'socmed_id' => 'required|exists:socmeds,id',
            'name' => 'required|max:255',
            'deskripsi' => 'max:255',
            'link' => 'max:255',
        ]);

        Contact::create($validatedData);

        return redirect('/admin/dashboard/contacts')->with('success', 'Menambah Contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('dashboard.contacts.edit', [
            "title" => "Contact",
            "contact" => $contact,
            "socmeds" => Socmed::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $validatedData = $request->validate([
            "socmed_id" => "required|exists:socmeds,id",
            "name" => "required|max:255",
            "deskripsi" => "max:255",
            "link" => "max:255",
        ]);

        Contact::where('id', $contact->id)->update($validatedData);
        return redirect('/admin/dashboard/contacts')->with('success', 'Mengubah Contact');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        Contact::destroy($contact->id);
        return redirect('/admin/dashboard/contacts')->with('success', 'Menghapus Contact');
    }
}
