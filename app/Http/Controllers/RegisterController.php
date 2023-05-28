<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login.register', [
            'title' => 'Register'
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|regex:/^.+@.+(\.[^.]+)+$/',
            'password' => 'required|min:8|confirmed',
        ], [
            'password.confirmed' => 'The password confirmation does not match.',
        ]);

        // Create a new user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        // Log in the user
        auth()->login($user);

        return redirect()->intended('/')->with('success', 'Registration successful.');;
    }
}
