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
            ],
        ];

        foreach ($booksArr as $item)
        Book::create($item);

        dd('created');
    }
}
