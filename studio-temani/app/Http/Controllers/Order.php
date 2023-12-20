<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Order extends Controller
{
    public function check() {
        return view ('check', [
            "title" => "check"
        ]);
    }
}
