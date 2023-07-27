<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact', [
            "contacts" => Contact::with(['socmed'])->oldest()->get(),
        ]);
    }
}
