<?php

namespace App\Http\Controllers;

use App\Models\SuperAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user(); // Get the currently authenticated user
        $data = SuperAdmin::where('id', $user->id)->get()->first(); // Fetch inventory data for the current user
        return view('super-admin', ['title' => 'Super Admin', 'data' => $data]);
    }
}
