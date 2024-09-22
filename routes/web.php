<?php

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\RentalController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\RentalController as FrontendRentalController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Frontend\CarController as FrontendCarController;

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

Route::get('/about', [HomeController::class, 'about'])->name('frontend.about');
Route::prefix('cars')->group(function () {
    Route::get('/', [FrontendCarController::class, 'index'])->name('frontend.cars.index');
    Route::get('/{car}', [FrontendCarController::class, 'show'])->name('frontend.cars.show');
});
Route::get('/', [HomeController::class, 'index'])->name('frontend.home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('frontend.profile');
    Route::get('/settings', [ProfileController::class, 'edit'])->name('frontend.settings');
    Route::put('/settings', [ProfileController::class, 'update'])->name('frontend.settings.update');

    // Frontend rental management
    Route::prefix('rentals')->group(function () {
        Route::get('/create/{car}', [FrontendRentalController::class, 'create'])->name('frontend.rentals.create');
        Route::post('/create/{car}', [FrontendRentalController::class, 'store'])->name('frontend.rentals.store');
        Route::get('/', [FrontendRentalController::class, 'index'])->name('frontend.rentals.index');
        Route::delete('/{rental}', [FrontendRentalController::class, 'cancel'])->name('frontend.rentals.cancel');
    });
});

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('admin/dashboard', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.dashboard')->middleware('isAdmin');
    Route::prefix('admin')->group(function () {
        Route::get('/cars', [CarController::class, 'index'])->name('admin.cars.index');
        Route::get('cars/create', [CarController::class, 'create'])->name('admin.cars.create');
        Route::post('cars', [CarController::class, 'store'])->name('admin.cars.store');
        Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('admin.cars.edit');
        Route::put('/cars/{car}', [CarController::class, 'update'])->name('admin.cars.update');
        Route::delete('/cars/{car}', [CarController::class, 'destroy'])->name('admin.cars.destroy');

        Route::get('/rentals', [RentalController::class, 'index'])->name('admin.rentals.index');
        Route::get('/rentals/{rental}', [RentalController::class, 'show'])->name('admin.rentals.show');
        Route::put('/rentals/{rental}', [RentalController::class, 'update'])->name('admin.rentals.update');
        Route::delete('/rentals/{rental}', [RentalController::class, 'destroy'])->name('admin.rentals.destroy');

        Route::get('/customers', [CustomerController::class, 'index'])->name('admin.customers.index');
        Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('admin.customers.show');
        Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('admin.customers.edit');
        Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('admin.customers.update');
        Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('admin.customers.destroy');
    });
});


