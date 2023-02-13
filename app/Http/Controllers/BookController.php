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
                'books' => 'Мёртвые души',
                'author' => 'Николай Гоголь',
                'description' => 'Сатира',
            ],
            [
                'books' => 'Ревизор',
                'author' => 'Николай Гоголь',
                'description' => 'Комедия',
            ],[
                'books' => 'Воскресение',
                'author' => 'Лев Толстой',
                'description' => 'Роман',
            ],[
                'books' => 'Мастер и Маргарита',
                'author' => 'Михаил Булгаков',
                'description' => 'Роман',
            ],[
                'books' => 'Война и мир',
                'author' => 'Лев Толстой',
                'description' => 'Исторический',
            ],[
                'books' => 'Драма на охоте',
                'author' => 'Антон Чехов ',
                'description' => 'Драма',
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
}
