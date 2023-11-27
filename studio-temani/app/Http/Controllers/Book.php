<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Book extends Controller
{
    public function book() {
        return view('book', [
            "title" => "Booking"
        ]);
    }
}
