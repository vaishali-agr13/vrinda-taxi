<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;

use App\Http\Controllers\TourPackageController;

use App\Http\Controllers\HomeController;




Route::prefix('admin')->group(function () {

    // guest routes
    Route::get('/login', [AuthController::class, 'login'])->name('admin.login');

    Route::post('/login', [AuthController::class, 'loginSubmit'])->name('admin.login.submit');

    Route::middleware('admin.auth')->group(function () {

            Route::get('/bookings', [BookingController::class, 'index'])->name('admin.bookings');
            
            Route::get('/bookings/{id}', [BookingController::class, 'show'])->name('admin.bookings.show');

            Route::post('/bookings/status/{id}', [BookingController::class, 'statusUpdate'])->name('admin.bookings.status');

            Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');

            Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

            Route::resource('cars', CarController::class);

            Route::get('/tour-packages', [TourPackageController::class, 'index'])->name('tour-packages.index');



            Route::get('/tour-packages/create', [TourPackageController::class, 'create'])->name('tour-packages.create');

            Route::get('/tour-packages/edit/{id}', [TourPackageController::class, 'edit'])->name('tour-packages.edit');

            Route::post('/tour-packages/store', [TourPackageController::class, 'store'])->name('tour-packages.store');
   
            Route::put('/tour-packages/update/{id}', [TourPackageController::class, 'update'])->name('tour-packages.update');

            Route::delete('/tour-packages/delete/{id}', [TourPackageController::class, 'destroy'])->name('tour-packages.destroy');
     });

});

Route::post('/booking/calculate', [BookingController::class, 'calculate'])->name('booking.calculate');
Route::get('/', [HomeController::class, 'index']);

Route::get('/tour-package/{id}', [TourPackageController::class, 'show'])->name('tour-packages.show');


Route::get('/booking/success/{id}', [BookingController::class, 'success'])
    ->name('booking.success');

