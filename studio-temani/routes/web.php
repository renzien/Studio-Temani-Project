<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Book;
use App\Http\Controllers\Studio;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Posting;
use App\Http\Controllers\Katalog;
use App\Http\Controllers\Account;
use App\Http\Controllers\Tagihan;
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
    return view('home', [
        "title" => "Home"
    ]);
});

// Studio
Route::get('/studio', [Studio::class, 'studio']);
Route::get('/pricelist', [Studio::class, 'pricelist']);

// Booking
Route::get('/book', [Book::class, 'book']);

// Auth
Route::get('/admin', [Dashboard::class, 'index'])->middleware('auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'process'])->name('process');
Route::get('/register', [LoginController::class, 'register']);
Route::post('/register', [LoginController::class, 'registerProcess'])->name('register');

// Home Posting
Route::get('/adminhome', [Posting::class, 'posting']);

// Katalog
Route::get('/selfphoto', [Katalog::class, 'selfphoto']);
Route::get('/familyphoto', [Katalog::class, 'familyphoto']);
Route::get('/creativestudio', [Katalog::class, 'creativestudio']);

// Account
Route::get('/editaccount', [Account::class, 'account']);
Route::get('/configacc', [Account::class, 'configacc']);

// Tagihan
Route::get('/tagihan', [Tagihan::class, 'tagihan']);