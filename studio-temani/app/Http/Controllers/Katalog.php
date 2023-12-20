<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FamilyPhoto;

class Katalog extends Controller
{
    public function selfphoto() {
        return view('admin.layouts.selfad');
    }

    public function familyphoto() {
        $post = [
            'familyphotos' => FamilyPhoto::find(1),
        ];

        return view('admin.layouts.family', $post);
    }

    public function creativestudio() {
        return view('admin.layouts.creastudio');
    }

    // Function Family Photo
    public function editFamilyPhoto(Request $request, FamilyPhoto $familyphoto) {
        $data = [
            'title' => $request->input('title'),
            'descpack' => $request->input('descpack')
        ];

        $familyphoto->update($data);
        return redirect('/familyphoto')->with('success', 'Data berhasil diubah');
    }
}
