<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index() {
        return view('admin.layouts.auth');
        
    }

    public function process(Request $request) {
        $credential = $request -> validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function register() {
        return view('admin.layouts.reg');
    }

    public function registerProcess(Request $request) {
        $register = $request -> validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        User::create($register);
        return redirect('/login')->with('success', 'Register Berhasil');
    }

    public function forgot() {
        return view('admin.forgot', [
            "title" => "Lupa Password"
        ]);
    }
}
