<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\Studio;
use App\Models\Pricelist;
use App\Models\PricelistHome;
use App\Models\SelfPhoto;
use App\Models\CreativeSpace;
use App\Models\HomeStudio;
use App\Models\StudioEquip;
use App\Models\Family;
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
            'familys' => Family::find(1),
            'selfphotos' => SelfPhoto::find(1),
            'creativespaces' => CreativeSpace::find(1),
        ];

        return view('admin.layouts.adminprice', $postprice);
    }

    public function studio() {
        $poststudio = [
            'homestudios' => HomeStudio::find(1),
            'studioequips' => StudioEquip::find(1),
        ];

        return view('admin.layouts.adminstudio', $poststudio);
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

    public function editFamily(Request $request, Family $family) {
        $data = [
            'title' => $request->input('title'),
            'tagone' => $request->input('tagone'),
            'descone' => $request->input('descone'),
            'tagtwo' => $request->input('tagtwo'),
            'desctwo' => $request->input('desctwo'),
            'unit' => $request->input('unit'),
            'price' => $request->input('price'),
            'descprice' => $request->input('descprice'),
            'unitprice' => $request->input('unitprice'),
            'pricetwo' => $request->input('pricetwo'),
            'descpricetwo' => $request->input('descpricetwo'),
        ];

        $family->update($data);
        return redirect('/adminprice');
    }

    public function editSelfPhoto(Request $request, SelfPhoto $selfphoto) {
        $data = [
            'title' => $request->input('title'),
            'tagone' => $request->input('tagone'),
            'descone' => $request->input('descone'),
            'tagtwo' => $request->input('tagtwo'),
            'desctwo' => $request->input('desctwo'),
            'unit' => $request->input('unit'),
            'price' => $request->input('price'),
            'descprice' => $request->input('descprice'),
            'unitprice' => $request->input('unitprice'),
            'pricetwo' => $request->input('pricetwo'),
            'descpricetwo' => $request->input('descpricetwo'),
        ];

        $selfphoto->update($data);
        return redirect('/adminprice');
    }

    public function editCreativeSpace(Request $request, CreativeSpace $creativespace) {
        $data = [
            'title' => $request->input('title'),
            'tagone' => $request->input('tagone'),
            'descone' => $request->input('descone'),
            'tagtwo' => $request->input('tagtwo'),
            'desctwo' => $request->input('desctwo'),
            'tagthree' => $request->input('tagthree'),
            'descthree' => $request->input('descthree'),
            'tagfour' => $request->input('tagfour'),
            'tagfive' => $request->input('tagfive'),
            'unit' => $request->input('unit'),
            'price' => $request->input('price'),
            'unitprice' => $request->input('unitprice'),
            'pricetwo' => $request->input('pricetwo'),
            'descpricetwo' => $request->input('descpricetwo'),
        ];

        $creativespace->update($data);
        return redirect('/adminprice');
    }

    // Update Studio

    public function editHomeStudio(Request $request, HomeStudio $homestudio) {
        $data = [
            'title' => $request->input('title'),
            'tagline' => $request->input('tagline')
        ];

        $homestudio->update($data);
        return redirect('/adminstudio');
    }

    public function editStudioEquips(Request $request, StudioEquip $studioequip){
        $data = [
            'title' => $request->input('title'),
            'tagline' => $request->input('tagline'),
            'list1' => $request->input('list1'),
            'list2' => $request->input('list2'),
            'list3' => $request->input('list3'),
            'list4' => $request->input('list4'),
            'list5' => $request->input('list5'),
            'list6' => $request->input('list6'),
            'desc' => $request->input('desc'),
        ];

        $studioequip->update($data);
        return redirect('/adminstudio');
    }
}
