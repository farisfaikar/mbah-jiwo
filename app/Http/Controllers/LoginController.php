<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login()
    {
        return view('login.login', ['title' => 'Login']);
    }

    public function register()
    {
        return view('login.register', ['title' => 'Register']);
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role == "super_admin") {
                return redirect()->route('super-admin');
            } else if (Auth::user()->role == "admin") {
                return redirect()->route('admin');
            } else if (Auth::user()->role == "client") {
                return redirect()->route('client');
            } else if (Auth::user()->role == "guest") {
                return redirect()->route('guest');
            }
        }
 
        return back()->with('loginError', 'Login failed. Please try again.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
