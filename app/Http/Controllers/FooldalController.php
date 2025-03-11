<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class FooldalController extends Controller
{
    public function index()
    {
        // Vélemények lekérdezése az adatbázisból
        $reviews = Review::all();

        // Vélemények átadása a nézetnek
        return view('fooldal', compact('reviews'));
    }
}
