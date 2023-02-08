<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function view()
    {
        $books = Book::all();
        return view('books', compact('books'));
    }
}
