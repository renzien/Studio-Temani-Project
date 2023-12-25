<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class Order extends Controller
{
    public function check(Book $book) {
        // return view ('check', [
        //     "title" => "check"
        // ]);
        $post = [
            'books' => Book::all()
        ];

        return view('check', compact('book'));
    }

    public function payment(Request $request, Book $book) {
        // return view ('payment', [
        //     "title" => "payment"
        // ]);
        return view('payment', compact('book'));
    }

    public function store(Request $request) {
        $request->validate([
            'fullname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'guest' => 'required',
            'date' => 'required',
            'time' => 'required',
            'package' => 'required',
            'phone' => 'required'
        ]);

        $id = Book::create($request->all());

        return redirect()->route('check', ['book' => $id->id]);
    }
}
