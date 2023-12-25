<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->input('username');
        $password = $request->input('password');

        // Lakukan validasi login, misalnya menggunakan Auth::attempt
        if (auth()->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('home_page'); // Sesuaikan dengan nama rute home page Anda
        } else {
            return redirect()->back()->with('error', 'Login failed. Please try again.');
        }
    }
}
