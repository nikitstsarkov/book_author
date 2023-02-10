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

    public function create()
    {
        return view('book.create');
    }

    public function store()
    {
        $data = request()->validate([
            'books' => 'string',
            'author' => 'string',
            'description' => 'string',
        ]);
        Book::create($data);
        return redirect()->route('book.view');
    }

    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('book.edit', compact('book'));
    }

    public function update(Book $book)
    {
        $data = request()->validate([
            'books' => 'string',
            'author' => 'string',
            'description' => 'string',
        ]);
        $book->update($data);
        return redirect()->route('book.show', $book->id);
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('book.view');
    }
}
