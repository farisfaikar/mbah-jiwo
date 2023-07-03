<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');

/*----------------------------------------------
Authentication
----------------------------------------------*/
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'authenticate'])->name('authenticate');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('store-register');
});
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

/*----------------------------------------------
Inventory
----------------------------------------------*/
Route::middleware(['auth'])->group(function () {  // TODO Add multi-auth:client
    Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory');
    Route::get('/inventory/create', [InventoryController::class, 'create'])->name('create-inventory');
    Route::post('/inventory/store',  [InventoryController::class, 'store'])->name('store-inventory');
    Route::get('/inventory/edit/{id}', [InventoryController::class, 'edit'])->name('edit-inventory');
    Route::post('/inventory/update/{id}', [InventoryController::class, 'update'])->name('update-inventory');
    Route::get('/inventory/delete/{id}', [InventoryController::class, 'destroy'])->name('delete-inventory');
});

/*----------------------------------------------
Finance
----------------------------------------------*/
Route::middleware(['auth'])->group(function () {
    Route::get('/finance', [FinanceController::class, 'index'])->middleware('auth')->name('finance');
});

/*----------------------------------------------
Admin
----------------------------------------------*/
Route::middleware(['auth'])->group(function () {  // TODO Add multi-auth:admin
    // User
    Route::get('admin/user', [AdminController::class, 'user'])->name('user');
    Route::get('admin/user/create', [AdminController::class, 'create'])->name('create-user');
    Route::post('admin/user/store', [AdminController::class, 'store'])->name('store-user');
    Route::get('admin/user/{id}', [AdminController::class, 'show'])->name('show-user');
    Route::get('admin/user/edit/{user}', [AdminController::class, 'edit'])->name('edit-user');
    Route::post('admin/user/update/{user}', [AdminController::class, 'update'])->name('update-user');
    Route::get('admin/user/delete/{user}', [AdminController::class, 'destroy'])->name('delete-user');

    // Inventory
    Route::get('admin/user/{id}/inventory', [AdminController::class, 'inventory'])->name('admin-inventory');

    // Finance
    Route::get('admin/user/{id}/finance', [AdminController::class, 'finance'])->name('admin-finance');
});


/*----------------------------------------------
Contact Us
----------------------------------------------*/
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::post('/contact-us/store', [ContactUsController::class, 'store'])->name('store-contact-us');

/*----------------------------------------------
Google
----------------------------------------------*/
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google-login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google-callback');
