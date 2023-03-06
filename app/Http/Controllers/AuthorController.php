<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function view()
    {
        $authors = Author::all();
        return view('author.index', compact('authors'));
    }

    public function create()
    {
        $authors = Author::all();
        return view('author.create', compact('authors'));
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'string',
        ]);
        $author = Author::create($data);
        return redirect()->route('author.view');
    }

    public function show(Author $author)
    {
        return view('author.show', compact('author'));
    }

    public function edit(Author $author)
    {
        $authors = Author::all();
        return view('author.edit', compact('author', 'authors'));
    }

    public function update(Author $author, Request $request)
    {
        request()->validate
        ([
            'title' => 'string',
        ]);
        //$author->update($data);
        return redirect()->route('author.show', $author->id);
    }

    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('author.view');
    }
}
