<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FinanceController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;

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
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::get('/sign-in', [LoginController::class, 'sign_in'])->name('sign-in');
Route::get('/sign-up', [LoginController::class, 'sign_up'])->name('sign-up');

/*----------------------------------------------
Inventory
----------------------------------------------*/
Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory');
Route::get('/inventory/create', [InventoryController::class, 'create'])->name('create-inventory');
Route::post('/inventory/store',  [InventoryController::class, 'store'])->name('store-inventory');
Route::get('/inventory/edit/{id}', [InventoryController::class, 'edit'])->name('edit-inventory');
Route::post('/inventory/update/{id}', [InventoryController::class, 'update'])->name('update-inventory');
Route::get('/inventory/delete/{id}', [InventoryController::class, 'destroy'])->name('delete-inventory');
// Route::get('/inventory/show/{id}', [InventoryController::class, 'show'])->name('show-inventory');

/*----------------------------------------------
Payment
----------------------------------------------*/
Route::get('/payment', [PaymentController::class, 'index'])->name('payment');

/*----------------------------------------------
Finance
----------------------------------------------*/
Route::get('/finance', [FinanceController::class, 'index'])->name('finance');
// Route::get('/finance/index', [FinanceController::class, 'index'])->name('finance');
// Route::get('/finance/edit', [FinanceController::class, 'edit'])->name('edit-finance');
