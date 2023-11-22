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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/pricelist', function() {
    return view('pricelist', [
       "title" => "Pricelist" 
    ]);
});

Route::get('/book', function() {
    return view('book' , [
        "title" => "Booking Now"
    ]);
});

Route::get('/admin', function() {
    return view ('admin.admin', [
        "title" => "Dashboard Admin"
    ]);
});