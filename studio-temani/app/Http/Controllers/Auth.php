<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
{
    public function index() {
        return view('admin.login', [
            "title" => "Login Admin"
        ]);
        
    }

    public function register() {
        return view('admin.register', [
            "title" => "Daftar Admin"
        ]);
    }

    public function forgot() {
        return view('admin.forgot', [
            "title" => "Lupa Password"
        ]);
    }
}
