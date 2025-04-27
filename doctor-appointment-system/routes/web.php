<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    
    Route::resource('appointments', AppointmentController::class);
    Route::resource('doctors', DoctorController::class);
});


require __DIR__.'/auth.php';
