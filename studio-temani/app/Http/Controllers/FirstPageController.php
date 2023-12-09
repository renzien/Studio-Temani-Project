<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\Studio;
use App\Models\Pricelist;
use App\Models\Contact;

class FirstPageController extends Controller
{
    public function index() {
        // $homepost = Home::find(1);
        // return view('home', compact('homepost'));
        $post = [
            'homes' => Home::find(1),
            'abouts' => About::find(1),
            'studios' => Studio::find(1),
            'pricelists' => Pricelist::find(1),
            'contacts' => Contact::find(1),
        ];

        return view('home', $post);
    }
}
