<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function books()
    {
        $books = Book::all();
        foreach ($books as $book)
        {
            dump($book->author);
        }
        dd('all author');
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
        $book = Book::find(6); //withTrasged() this is restore
        $book->delete();
        dd('deleted');
    }
    public function view()
    {
        $books = Book::all();
        return view('books', compact('books'));
    }
}
