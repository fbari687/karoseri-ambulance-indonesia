<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Brand;
use App\Models\Spec;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard', [
            'cars' => Car::all(),
            'brands' => Brand::all(),
            'specs' => Spec::all()
        ]);
    }
}
