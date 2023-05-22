<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function sign_in()
    {
        return view('login.sign-in', ['title' => 'Sign In']);
    }

    public function sign_up()
    {
        return view('login.sign-up', ['title' => 'Sign Up']);
    }
}
