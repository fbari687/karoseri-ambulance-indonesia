<?php

use App\Http\Controllers\CarController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/cars', [CarController::class, 'index']);

Route::get('/specs', function () {
    return view('specs');
});

Route::get('/about', function () {
    return view('about', [
        'logo' => 'icon.png',
        'name' => 'PT. Karoseri Ambulance Indonesia'
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
