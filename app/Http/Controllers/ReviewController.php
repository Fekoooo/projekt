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
}
