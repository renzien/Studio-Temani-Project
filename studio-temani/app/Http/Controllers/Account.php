<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Account extends Controller
{
    public function account() {
        return view('admin.layouts.editacc');
    }
    public function configacc() {
        return view('admin.layouts.accfig');
    }
}
