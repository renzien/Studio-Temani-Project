<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tagihan extends Controller
{
    public function tagihan() {
        return view('admin.layouts.tagihancontent');
    }
}
