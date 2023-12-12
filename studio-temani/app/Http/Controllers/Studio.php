<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PricelistHome;
use App\Models\Inquiry;
use App\Models\Family;
use App\Models\SelfPhoto;

class Studio extends Controller
{
    public function studio() {
        return view('studio', [
            "title" => "Studio"
        ]);
    }

    public function pricelist() {
        // return view('pricelist', [
        //     "title" => "Pricelist"
        // ]);
        $post = [
            'pricelisthomes' => PricelistHome::find(1),
            'inquirys' => Inquiry::find(1),
            'familys' => Family::find(1),
            'selfphotos' => SelfPhoto::find(1)
        ];

        return view('pricelist', $post);
    }
}
