<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function view()
    {
        $authors = Author::all();
        return view('authors', compact('authors'));
    }

    public function create()
    {
        $authorsArr =
            [
                [
                    'author' => 'Николай Гоголь',
            ],[
                'author' => 'Лев Толстой',
            ],[
                'author' => 'Антон Чехов ',
            ]
            ];

        foreach ($authorsArr as $item)
            Author::create($item);

        dd('created');
    }

    public function author()
    {
        $books = Author::all();
        return view('book.index', compact('books'));
    }
}
