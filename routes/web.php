<?php

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\FooldalController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/submit-review', [ReviewController::class, 'store'])->name('submit-review');
Route::get('/fooldal', [FooldalController::class, 'index'])->name('fooldal');
// Szállások listázása
Route::get('/ingatlanok', [PropertyController::class, 'index'])->name('ingatlanok');

// Foglalás mentése
Route::post('/foglalas', [PropertyController::class, 'book'])->name('foglalas');    


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');



Route::get('/kontakt', function()
{
    return view('kontakt');
    return redirect()->route('kontakt');
})->name('kontakt');
