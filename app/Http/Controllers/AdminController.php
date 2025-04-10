<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Dashboard megjelenítése.
     */
    public function dashboard()
    {
        // Szállásfoglalások lekérése az aktuális felhasználóhoz
        $bookings = auth()->user()->bookings; // Feltételezzük, hogy a User modellben van egy 'bookings' kapcsolat

        // Utazásfoglalások lekérése az aktuális felhasználóhoz
        $tripBookings = auth()->user()->tripBookings; // Feltételezzük, hogy a User modellben van egy 'tripBookings' kapcsolat

        // Nézet visszaadása a foglalásokkal
        return view('admin.dashboard', compact('bookings', 'tripBookings'));
    }

    /**
     * Kijelentkezés.
     */
    public function logout(Request $request)
    {
        auth()->logout(); // Felhasználó kijelentkeztetése
        return redirect()->route('fooldal'); // Visszairányítás a főoldalra
    }
}
