<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function view()
    {
        $books = Book::all();
        return view('book.index', compact('books'));
    }

    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }
}
