<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;

class FirstPageController extends Controller
{
    public function index() {
        // $homepost = Home::find(1);
        // return view('home', compact('homepost'));
        $post = [
            'homes' => Home::find(1),
            'abouts' => About::find(1),
        ];

        return view('home', $post);
    }
}
