<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Posting extends Controller
{
    public function posting() {
        return view('admin.layouts.adHome');
    }
}
