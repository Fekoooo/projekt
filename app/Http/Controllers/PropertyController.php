<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Booking;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    
     public function search(Request $request)
    {
        // Keresési kifejezés lekérése
        $query = $request->input('query');

        // Ingatlanok szűrése a város alapján
        $properties = Property::where('location', 'LIKE', '%' . $query . '%')->get();

        // Nézet visszaadása a szűrt ingatlanokkal
        return view('search', compact('properties', 'query'));
    }
    // Szállások lekérdezése
    public function index()
    {
        $properties = Property::all(); // Lekérjük az összes szállást az adatbázisból
        return view('ingatlanok', compact('properties')); // Átadjuk a nézetnek
    }

    // Foglalás mentése
    public function book(Request $request)
    {
        // Validáció
        $request->validate([
            'property_id' => 'required|exists:properties,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'start_date' => 'required|date|after_or_equal:today', // Kezdő dátum nem lehet korábbi, mint a mai nap
            'end_date' => 'required|date|after:start_date',       // Befejező dátumnak későbbinek kell lennie, mint a kezdő dátum
        ]);

        // Ütközésellenőrzés
        $existingBooking = Booking::where('property_id', $request->property_id)
            ->where(function ($query) use ($request) {
                $query->whereBetween('start_date', [$request->start_date, $request->end_date])
                      ->orWhereBetween('end_date', [$request->start_date, $request->end_date])
                      ->orWhere(function ($query) use ($request) {
                          $query->where('start_date', '<=', $request->start_date)
                                ->where('end_date', '>=', $request->end_date);
                      });
            })
            ->exists(); // Csak azt ellenőrizzük, hogy létezik-e ilyen foglalás

        if ($existingBooking) {
            return redirect()->back()->with('error', 'Ez a szállás már foglalt az adott időszakra.');
        }

        // Foglalás létrehozása
        Booking::create([
            'property_id' => $request->property_id,
            'name' => $request->name,
            'email' => $request->email,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return redirect()->back()->with('success', 'Sikeresen lefoglaltad a szállást!');
    }
}


