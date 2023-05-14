<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/inventory', function () {
    return view('inventory');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/login', function () {
    return view('login');
});
