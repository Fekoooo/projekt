<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Booking;
use Illuminate\Http\Request;

class TripController extends Controller
{

    public function index()
    {
        // Az összes utazás lekérdezése az adatbázisból
        $trips = Trip::all();

        // Az utazások átadása a nézetnek
        return view('trips.index', compact('trips'));
    }
    public function book(Request $request)
    {
        // Validáció
        $request->validate([
            'trip_id' => 'required|exists:trips,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after:start_date',
        ]);

        // Ütközésellenőrzés
        $existingBooking = Booking::where('trip_id', $request->trip_id)
            ->where(function ($query) use ($request) {
                $query->whereBetween('start_date', [$request->start_date, $request->end_date])
                      ->orWhereBetween('end_date', [$request->start_date, $request->end_date])
                      ->orWhere(function ($query) use ($request) {
                          $query->where('start_date', '<=', $request->start_date)
                                ->where('end_date', '>=', $request->end_date);
                      });
            })
            ->exists();

        if ($existingBooking) {
            return redirect()->back()->with('error', 'Ez az utazás már foglalt az adott időszakra.');
        }

        // Foglalás mentése
        Booking::create([
            'trip_id' => $request->trip_id,
            'name' => $request->name,
            'email' => $request->email,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return redirect()->back()->with('success', 'Sikeresen lefoglaltad az utazást!');
    }
}
