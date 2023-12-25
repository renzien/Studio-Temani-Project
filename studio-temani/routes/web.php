<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\FirstPageController;
use App\Http\Controllers\Book;
use App\Http\Controllers\Order;
use App\Http\Controllers\Studio;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\UploadController;
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

// Index
Route::get('/', [FirstPageController::class, 'index']);

// Studio
Route::get('/studio', [Studio::class, 'studio']);
Route::get('/pricelist', [Studio::class, 'pricelist']);

// Booking
Route::get('/book', [Book::class, 'book']);

// Order
Route::get('/check/{book}', [Order::class, 'check'])->name('check');
// Route::get('/check/payment/{book}', [Order::class, 'payment'])->name('payment');
Route::post('/pesan', [Order::class, 'store'])->name('pesan');


// Auth
Route::get('/admin', [Dashboard::class, 'index'])->middleware('auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'process'])->name('process');
Route::get('/register', [LoginController::class, 'register']);
Route::post('/register', [LoginController::class, 'registerProcess'])->name('register');

// Home Posting
Route::get('/adminhome', [Posting::class, 'posting']);
Route::put('/adminhome/{home}', [Posting::class, 'editHome'])->name('editHome');
Route::put('/adminhome/{about}/edit', [Posting::class, 'editAbout'])->name('editAbout');
Route::put('/adminhome/{studio}/editstudio', [Posting::class, 'editStudio'])->name('editStudio');
Route::put('/adminhome/{pricelist}/editpricelist', [Posting::class, 'editPricelist'])->name('editPricelist');
Route::put('/adminhome/{contact}/editcontact', [Posting::class, 'editContact'])->name('editContact');

// Pricelist Posting
Route::get('/adminprice', [Posting::class, 'pricelist']);
Route::put('/adminprice/{pricelisthome}', [Posting::class, 'editPricelistHome'])->name('editPricelistHome');
Route::put('/adminprice/{inquiry}/editinquiry', [Posting::class, 'editInquiry'])->name('editInquiry');
Route::put('/adminprice/{family}/editfamily', [Posting::class, 'editFamily'])->name('editFamily');
Route::put('/adminprice/{selfphoto}/editselfphoto', [Posting::class, 'editSelfPhoto'])->name('editSelfPhoto');
Route::put('/adminprice/{creativespace}/editcreativespace', [Posting::class, 'editCreativeSpace'])->name('editCreativeSpace');

// Studio Posting
Route::get('/adminstudio', [Posting::class, 'studio']);
Route::put('/adminstudio/{homestudio}', [Posting::class, 'editHomeStudio'])->name('editHomeStudio');
Route::put('/adminstudio/{studioequip}/editstudioequip', [Posting::class, 'editStudioEquips'])->name('editStudioEquip');
Route::put('/adminstudio/{quote}/editquote', [Posting::class, 'editQuote'])->name('editQuote');
Route::put('/adminstudio/{package}/editpackage', [Posting::class, 'editPackage'])->name('editPackage');

// Katalog Self Photo
Route::get('/selfphoto', [Katalog::class, 'selfphoto']);
Route::put('/selfphoto/{selfsession}', [Katalog::class, 'editSelfSession'])->name('editSelfSession');

// Katalog Family Photo
Route::get('/familyphoto', [Katalog::class, 'familyphoto']);
Route::put('/familyphoto/{familyphoto}', [Katalog::class, 'editFamilyPhoto'])->name('editFamilyPhoto');

// Katalog Creative Studio
Route::get('/creativestudio', [Katalog::class, 'creativestudio']);
Route::put('/creativestudio/{creaspace}', [Katalog::class, 'editCreaSpace'])->name('editCreaSpace');

// Account
Route::get('/editaccount', [Account::class, 'account']);
Route::get('/configacc', [Account::class, 'configacc']);

// Tagihan
Route::get('/tagihan', [Tagihan::class, 'tagihan']);

// Upload
Route::post('/upload', [UploadController::class, 'store']);