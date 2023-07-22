<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spec;

class SpecController extends Controller
{
    public function index()
    {
        return view('specs', [
            "specs" => Spec::oldest()->get()
        ]);
    }
}
