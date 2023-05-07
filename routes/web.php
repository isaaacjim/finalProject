<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarketplaceController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/marketplace', [App\Http\Controllers\MarketplaceController::class, 'index'])->name('marketplace');
Route::get('/marketplacecheckout/{card_id}', [App\Http\Controllers\MarketplaceController::class, 'store'])->name('marketplacecheckout');
Route::post('/insertion', [App\Http\Controllers\CardController::class, 'store'])->name('insertion');
Route::get('/delete{id}', [App\Http\Controllers\CardController::class, 'destroy'])->name('delete');
Route::get('/edit/{id}',[CardController::class, 'edit'])->name('edit');
Route::post('/modify{id}',[CardController::class, 'update'])->name('update');
Route::get('/card-names', [CardController::class, 'getCardNameAndId']);

