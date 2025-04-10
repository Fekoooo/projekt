<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TripBooking;

class TripBookingController extends Controller
{
    public function store(Request $request)
{
    // Validáció
    $request->validate([
        'trip_id' => 'required|exists:trips,id', // Ellenőrzi, hogy létezik-e az utazás
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
    ]);

    // Ellenőrzés: már létezik-e a foglalás az adott email címmel
    $existingBooking = TripBooking::where('trip_id', $request->input('trip_id'))
        ->where('email', $request->input('email'))
        ->first();

    if ($existingBooking) {
        // Hibaüzenet visszaadása
        return redirect()->back()->with('error', 'Ezt az utazást már egyszer lefoglaltad.');
    }

    // Foglalás mentése
    TripBooking::create([
        'trip_id' => $request->input('trip_id'),
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'start_date' => $request->input('start_date'),
        'end_date' => $request->input('end_date'),
    ]);

    // Sikeres visszajelzés
    return redirect()->back()->with('success', 'Az utazás sikeresen lefoglalva!');
}


}

