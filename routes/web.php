<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;

use App\Http\Controllers\TourPackageController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourManagementController;



Route::get('/about', function () {return view('front-end.about'); })->name('about');
Route::get('/contact', function () {return view('front-end.contact'); })->name('contact');

Route::get('/airport-taxi', function () {return view('front-end.airport-taxi'); });
Route::get('/outstation-taxi', function () {return view('front-end.outstation-taxi'); });
Route::get('/vrindavan-sightseeing', function () {return view('front-end.vrindavan-sightseeing'); });

Route::get('/package', function () {return view('front-end.package'); })->name('package');
Route::get('/vrindavan-to-rishikesh-taxi-service', function () {return view('front-end.vrindavan-to-rishikesh-taxi-service'); });

Route::get('/{slug}', [BookingController::class, 'taxiService'])->name('taxi.service');


Route::prefix('admin')->group(function () {

    // guest routes
    Route::get('/login', [AuthController::class, 'login'])->name('admin.login');

    Route::post('/login', [AuthController::class, 'loginSubmit'])->name('admin.login.submit');

    Route::middleware('admin.auth')->group(function () {

            Route::get('/profile', [AuthController::class, 'edit'])->name('admin.profile.edit');

            Route::put('/profile', [AuthController::class, 'update'])->name('admin.profile.update');

            Route::get('/bookings', [BookingController::class, 'index'])->name('admin.bookings');
            
            Route::get('/bookings/{id}/edit', [BookingController::class, 'edit'])->name('bookings.edit');

            Route::put('/bookings/{id}', [BookingController::class, 'update'])->name('bookings.update');
            
            Route::get('/bookings/{id}', [BookingController::class, 'show'])->name('admin.bookings.show');

            Route::post('/bookings/status/{id}', [BookingController::class, 'statusUpdate'])->name('admin.bookings.status');

            Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');

            Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

            Route::resource('cars', CarController::class);

            Route::get('/tour-packages', [TourPackageController::class, 'index'])->name('tour-packages.index');

            Route::get('/tour-bookings/pdf', [TourManagementController::class, 'downloadAllPdf'])->name('tour-bookings.pdf');
            
            Route::resource('/tour-bookings', TourManagementController::class);

            
            Route::get('/tour-packages/create', [TourPackageController::class, 'create'])->name('tour-packages.create');

            Route::get('/tour-packages/edit/{id}', [TourPackageController::class, 'edit'])->name('tour-packages.edit');

            Route::post('/tour-packages/store', [TourPackageController::class, 'store'])->name('tour-packages.store');
   
            Route::put('/tour-packages/update/{id}', [TourPackageController::class, 'update'])->name('tour-packages.update');

            Route::delete('/tour-packages/delete/{id}', [TourPackageController::class, 'destroy'])->name('tour-packages.destroy');
     });

});

Route::post('/booking/calculate', [BookingController::class, 'calculate'])->name('booking.calculate');

Route::get('/', [HomeController::class, 'index']);

Route::get('/booking/{id}/whatsapp', [BookingController::class, 'sendWhatsApp'])->name('booking.whatsapp');

Route::get('/tour-package/{id}', [TourPackageController::class, 'show'])->name('tour-packages.show');


Route::get('/booking/success/{id}', [BookingController::class, 'success'])
    ->name('booking.success');

