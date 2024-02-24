<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('session.login');
    }

    // Handle the login form submission
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication was successful
            return redirect()->route('admin.dashboard');
        }

        // Authentication failed
        dd('Login failed', $credentials); // Add this line for debugging
        return back()->withErrors(['email' => 'Invalid login credentials']);
    }

    // Handle user logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

