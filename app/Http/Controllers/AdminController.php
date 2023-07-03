<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user(); // Get the currently authenticated user
        dd($user);
        $data = Admin::where('user_id', $user->id)->get()->first(); // Fetch inventory data for the current user
        return view('admin', ['title' => 'Admin', 'data' => $data]);
    }
}
