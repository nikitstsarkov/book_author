<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function books()
    {
        $authors = Book::all()->pluck('author')->toArray();
        //dd($authors);
        //$count = Book::where('author', $authors[0])->count();
        //dd($count);
        $counts = [];
        foreach($authors as $key => $val) {
            $counts[$val] = Book::where('author', $val)->count();
        }

        dd($counts);
    }


    public function view()
    {
        $books = Book::all();
        return view('book.index', compact('books'));
    }

    public function create()
    {
        $authors = Author::all();
        return view('book.create', compact('authors'));
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'string',
        ]);
        $book = Book::create($data);
        $book->author()->sync([$request->author]);
        return redirect()->route('book.view');
    }

    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $authors = Author::all();
        return view('book.edit', compact('book', 'authors'));
    }

    public function update(Book $book, Request $request)
    {
        $data = request()->validate([
            'title' => 'string',
        ]);
        $book->update($data);
        $book->author()->sync([$request->author]);
        return redirect()->route('book.show', $book->id);
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('book.view');
    }
}
