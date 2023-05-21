<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index()
    {
        return view('finance.index-finance', [
            'title' => 'Finance'
        ]);
    }

    public function editFinance()
    {
        return view('finance.edit-finance', [
            'title' => 'Edit Finance'
        ]);
    }
}
