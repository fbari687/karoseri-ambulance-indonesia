<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\DashboardBrandsController;
use App\Http\Controllers\DashboardCarouselsController;
use App\Http\Controllers\DashboardCarsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPortfolioController;
use App\Http\Controllers\DashboardSpecsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SpecController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/cars', [CarController::class, 'index'])->name('models');

Route::get('/cars/{car:slug}', [CarController::class, 'show']);

Route::get('/specs', [SpecController::class, 'index'])->name('spesifikasi');

Route::get('/about', function () {
    return view('about', [
        'logo' => 'icon.png',
        'name' => 'PT. Karoseri Ambulance Indonesia'
    ]);
})->name('tentang');

Route::get('/contact', function () {
    return view('contact');
})->name('kontak');

Route::get('/portfolio', [PortfolioController::class, 'index']);

Route::get('/admin', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/admin', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('/admin/dashboard/brands', DashboardBrandsController::class)->middleware('auth');
Route::resource('/admin/dashboard/specs', DashboardSpecsController::class)->middleware('auth');
Route::get('/admin/dashboard/cars/checkSlug', [DashboardCarsController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/dashboard/cars', DashboardCarsController::class)->middleware('auth');
Route::resource('/admin/dashboard/carousels', DashboardCarouselsController::class)->middleware('auth');
Route::resource('/admin/dashboard/portfolios', DashboardPortfolioController::class)->middleware('auth');
