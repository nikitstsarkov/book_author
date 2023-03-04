<?php

namespace App\Http\Controllers;
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


    public function create()
    {
        $booksArr =
            [
            [
                'title' => 'Мёртвые души',
            ],
            [
                'title' => 'Ревизор',
            ],[
                'title' => 'Воскресение',
            ],[
                'title' => 'Война и мир',

            ],[
                'title' => 'Драма на охоте',

            ]
        ];

        foreach ($booksArr as $item)
        Book::create($item);

        dd('created');
    }

    public function update()
    {
        $book = Book::find(4);

        $book->update([
            'books' => 'Драма на охоте',
            'author' => 'Антон Чехов ',
            'description' => 'Драма',
        ]);
        dd("updated");
    }

    public function delete()
    {
        $book = Book::find(11); //withTrasged() this is restore
        $book->delete();
        dd('deleted');
    }
    public function view()
    {
        $books = Book::all();
        return view('books', compact('books'));
    }

    public function book()
    {
        $books = Book::with('author')->get();
        return view('book.index', compact('books'));
    }
}
