<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BookController extends Controller
{

    public function index()
    {

        return view('book.books');
    }
    public function show()
    {

        $books = Book::all();
        return view('book.list', ['books' => $books]);
    }


    public function store(Request $request)

    {



        $validated = $request->validate([

            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255'
        ]);





        \App\Models\Book::create([

            'title' => $validated['title'],
            'author' => $validated['author'],

        ]);



        return redirect('/book')->with('success', 'Chirp created!');
    }
}
