<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\SpecController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CarController::class, 'home']);

Route::get('/cars', [CarController::class, 'index']);

Route::get('/cars/{car:slug}', [CarController::class, 'show']);

Route::get('/specs', [SpecController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        'logo' => 'icon.png',
        'name' => 'PT. Karoseri Ambulance Indonesia'
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
