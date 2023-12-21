<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FamilyPhoto;
use App\Models\SelfSession;

class Book extends Controller
{
    public function book() {
        // return view('book', [
        //     "title" => "Booking"
        // ]);
        $post = [
            'familyphotos' => FamilyPhoto::find(1),
            'selfsessions' => SelfSession::find(1),
        ];

        return view('book', $post);
    }
}
