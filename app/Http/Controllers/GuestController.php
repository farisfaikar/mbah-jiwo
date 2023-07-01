<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user(); // Get the currently authenticated user
        $data = Guest::where('id', $user->id)->get(); // Fetch inventory data for the current user
        return view('guest', ['title' => 'Guest', 'data' => $data]);
    }
}
