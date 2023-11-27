<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers\Book;
use App\Http\Controllers\Studio;
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

Route::get('/admin', function() {
    return view ('admin.admin', [
        "title" => "Dashboard Admin"
    ]);
});

Route::get('/login', [Auth::class, 'index']);
Route::get('/register', [Auth::class, 'register']);
Route::get('/forgot', [Auth::class, 'forgot']);