<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Home Page Route
Route::get('/', function () {
    return view('home');
})->name('home');

// Auth Routes
Route::middleware(['guest'])->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
    Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [AuthController::class, 'register']);
});

Route::middleware(['auth'])->group(function () {
    // Home Route (After Login)
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Appointment Routes
    Route::get('appointments', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::post('appointments', [AppointmentController::class, 'store'])->name('appointments.store');
    
    // Doctor Routes
    Route::get('doctors', [DoctorController::class, 'index'])->name('doctors.index');
    Route::get('doctors/{doctor}', [DoctorController::class, 'show'])->name('doctors.show');
    
    // Logout Route
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

// Fallback Route for 404 errors
Route::fallback(function () {
    return view('404');  // Make sure to create a 404.blade.php page
});



