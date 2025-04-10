<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'review' => 'required|string',
        ]);

        // Vélemény mentése az adatbázisba (példa)
        \App\Models\Review::create($request->all());


        return redirect()->back()->with('success', 'Köszönjük a véleményed!');
    }
    public function submitReview(Request $request)
{
    // Ellenőrizzük, hogy a felhasználó be van-e jelentkezve
    if (Auth::check()) {
        $name = Auth::user()->name;
        $email = Auth::user()->email;
    } else {
        // Ha nincs bejelentkezve, a név és e-mail az űrlapból érkezik
        $name = $request->input('name');
        $email = $request->input('email');
    }

    // Validáció
    $request->validate([
        'review' => 'required|string|max:1000',
    ]);

    // Vélemény mentése
    Review::create([
        'name' => $name,
        'email' => $email,
        'review' => $request->input('review'),
    ]);

    return redirect()->back()->with('success', 'Köszönjük a véleményed!');
}

}
