<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\TripBooking;

class DashboardController extends Controller
{
    public function index()
    {
        // Lekérjük a bejelentkezett felhasználó szállásfoglalásait
        $bookings = Booking::where('email', auth()->user()->email)
            ->with('property') // Kapcsolódó szállás adatok
            ->get();

        // Lekérjük a bejelentkezett felhasználó utazásfoglalásait
        $tripBookings = TripBooking::where('email', auth()->user()->email)
            ->with('trip') // Kapcsolódó utazás adatok
            ->get();

        // Átadjuk a nézetnek
        return view('dashboard', compact('bookings', 'tripBookings'));
    }

    // Szállásfoglalás lemondása
    public function cancelBooking($id)
    {
        $booking = Booking::findOrFail($id);

        // Ellenőrizzük, hogy a foglalás a bejelentkezett felhasználóhoz tartozik-e
        if ($booking->email !== auth()->user()->email) {
            return redirect()->back()->with('error', 'Nem jogosult a foglalás lemondására.');
        }

        // Foglalás törlése
        $booking->delete();

        return redirect()->back()->with('success', 'A foglalás sikeresen lemondva.');
    }

    // Utazásfoglalás lemondása
    public function cancelTripBooking($id)
    {
        $tripBooking = TripBooking::findOrFail($id);

        // Ellenőrizzük, hogy a foglalás a bejelentkezett felhasználóhoz tartozik-e
        if ($tripBooking->email !== auth()->user()->email) {
            return redirect()->back()->with('error', 'Nem jogosult az utazás lemondására.');
        }

        // Foglalás törlése
        $tripBooking->delete();

        return redirect()->back()->with('success', 'Az utazás sikeresen lemondva.');
    }
}
