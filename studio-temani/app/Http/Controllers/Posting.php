<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;

class Posting extends Controller
{
    public function posting() {
        // $home = Home::find(1);
        $post = [
            'homes' => Home::find(1),
            'abouts' => About::find(1),
        ];
        return view('admin.layouts.adHome', $post);
    }
    public function pricelist() {
        return view('admin.layouts.adminprice');
    }
    public function studio() {
        return view('admin.layouts.adminstudio');
    }

    public function editHome(Request $request, Home $home) {
        $data = [
            'title' => $request->input('title'),
            'tagline' => $request->input('tagline')
        ];

        $home->update($data);
        return redirect('/adminhome');
    }

    public function editAbout(Request $request, About $about) {
        $data = [
            'title' => $request->input('title'),
            'desc' => $request->input('desc')
        ];

        $about->update($data);
        return redirect('/adminhome');
    }
}
