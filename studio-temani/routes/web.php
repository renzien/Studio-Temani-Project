<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Book;
use App\Http\Controllers\Studio;
use App\Http\Controllers\Dashboard;
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

Route::get('/studio', [Studio::class, 'studio']);
Route::get('/pricelist', [Studio::class, 'pricelist']);

Route::get('/book', [Book::class, 'book']);

Route::get('/admin', [Dashboard::class, 'index'])->middleware('auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'process'])->name('process');

Route::get('/register', [LoginController::class, 'register']);
Route::post('/register', [LoginController::class, 'registerProcess'])->name('register');

Route::get('/forgot', [LoginController::class, 'forgot']);