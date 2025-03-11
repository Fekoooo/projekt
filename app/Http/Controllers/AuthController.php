<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Regisztrációs oldal megjelenítése
    public function showRegister()
    {
        return view('auth.register');
    }

    // Regisztráció kezelése
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Sikeres regisztráció!');
    }

    // Bejelentkezési oldal megjelenítése
    public function showLogin()
    {
        return view('auth.login');
    }

    // Bejelentkezés kezelése
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard')->with('success', 'Sikeres bejelentkezés!');
        }

        return back()->withErrors(['email' => 'Hibás email vagy jelszó.']);
    }

    // Kijelentkezés
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Sikeres kijelentkezés!');
    }
}
