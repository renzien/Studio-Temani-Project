<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FamilyPhoto;
use App\Models\SelfSession;
use App\Models\CreaSpace;

class Katalog extends Controller
{
    public function selfphoto() {
        $post = [
            'selfsessions' => SelfSession::find(1),
        ];

        return view('admin.layouts.selfad', $post);
    }

    public function familyphoto() {
        $post = [
            'familyphotos' => FamilyPhoto::find(1),
        ];

        return view('admin.layouts.family', $post);
    }

    public function creativestudio() {
        $post = [
            'creaspaces' => CreaSpace::find(1),
        ];


        return view('admin.layouts.creastudio', $post);
    }

    // Function Family Photo
    public function editFamilyPhoto(Request $request, FamilyPhoto $familyphoto) {
        $data = [
            'title' => $request->input('title'),
            'descpack' => $request->input('descpack')
        ];

        $familyphoto->update($data);
        return redirect('/familyphoto');
    }

    // Function Self Photo
    public function editSelfSession(Request $request, SelfSession $selfsession) {
        $data = [
            'title' => $request->input('title'),
            'descpack' => $request->input('descpack')
        ];

        $selfsession->update($data);
        return redirect('/selfphoto');
    }

    // Function Creative Space
    public function editCreaSpace(Request $request, CreaSpace $creaspace) {
        $data = [
            'title' => $request->input('title'),
            'descpack' => $request->input('descpack')
        ];

        $creaspace->update($data);
        return redirect('/creativestudio');
    }
}
