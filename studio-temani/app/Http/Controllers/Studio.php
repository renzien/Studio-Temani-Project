<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Studio extends Controller
{
    public function studio() {
        return view('studio', [
            "title" => "Studio"
        ]);
    }

    public function pricelist() {
        return view('pricelist', [
            "title" => "Pricelist"
        ]);
    }
}
