<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\Studio;
use App\Models\Pricelist;
use App\Models\PricelistHome;
use App\Models\Inquiry;
use App\Models\Contact;

class Posting extends Controller
{
    public function posting() {
        // $home = Home::find(1);
        $post = [
            'homes' => Home::find(1),
            'abouts' => About::find(1),
            'studios' => Studio::find(1),
            'pricelists' => Pricelist::find(1),
            'contacts' => Contact::find(1),
        ];
        return view('admin.layouts.adHome', $post);
    }

    public function pricelist() {
        $postprice = [
            'pricelisthomes' => PricelistHome::find(1),
            'inquirys' => Inquiry::find(1),
        ];

        return view('admin.layouts.adminprice', $postprice);
    }

    public function studio() {
        return view('admin.layouts.adminstudio');
    }

    // Update Home
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

    public function editStudio(Request $request, Studio $studio) {
        $data = [
            'title' => $request->input('title'),
            'desc' => $request->input('desc')
        ];

        $studio->update($data);
        return redirect('/adminhome');
    }

    public function editPricelist(Request $request, Pricelist $pricelist) {
        $data = [
            'title' => $request->input('title'),
            'desc' => $request->input('desc')
        ];

        $pricelist->update($data);
        return redirect('/adminhome');
    }

    public function editContact(Request $request, Contact $contact) {
        $data = [
            'desc' => $request->input('desc')
        ];

        $contact->update($data);
        return redirect('/adminhome');
    }

    // Update Pricelist
    public function editPricelistHome(Request $request, PricelistHome $pricelisthome) {
        $data = [
            'title' => $request->input('title'),
            'desc' => $request->input('desc')
        ];

        $pricelisthome->update($data);
        return redirect('/adminprice');
    }

    public function editInquiry(Request $request, Inquiry $inquiry) {
        $data = [
            'title' => $request->input('title'),
            'desc' => $request->input('desc')
        ];

        $inquiry->update($data);
        return redirect('/adminprice');
    }
}
