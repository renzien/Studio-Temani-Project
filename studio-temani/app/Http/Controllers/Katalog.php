<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Katalog extends Controller
{
    public function selfphoto() {
        return view('admin.layouts.selfad');
    }
    public function familyphoto() {
        return view('admin.layouts.family');
    }
    public function creativestudio() {
        return view('admin.layouts.creastudio');
    }
}
