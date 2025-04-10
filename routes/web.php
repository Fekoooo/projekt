<?php

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\FooldalController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\TripBookingController;
use App\Http\Controllers\AdminController;

Route::post('/trip-bookings', [TripBookingController::class, 'store'])->name('trip_bookings.store');
Route::get('/trips', [TripController::class, 'index'])->name('trips.index');
Route::post('/trips/book', [TripBookingController::class, 'store'])->name('trips.book');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/submit-review', [ReviewController::class, 'store'])->name('submit-review');
Route::get('/', [FooldalController::class, 'index'])->name('fooldal');
// Szállások listázása
Route::get('/ingatlanok', [PropertyController::class, 'index'])->name('ingatlanok');
Route::get('/ingatlanok/search', [PropertyController::class, 'search'])->name('ingatlanok.search');

// Foglalás mentése
Route::post('/foglalas', [PropertyController::class, 'book'])->name('foglalas');    
Route::delete('/cancel-booking/{id}', [DashboardController::class, 'cancelBooking'])->name('cancel-booking');
Route::delete('/dashboard/bookings/{id}', [DashboardController::class, 'cancelBooking'])->name('cancel-booking');
Route::delete('/dashboard/trip-bookings/{id}', [DashboardController::class, 'cancelTripBooking'])->name('cancel-trip-booking');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
});



Route::get('/kontakt', function()
{
    return view('kontakt');
    return redirect()->route('kontakt');
})->name('kontakt');
