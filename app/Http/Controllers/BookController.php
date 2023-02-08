<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function books()
    {
        $book = Book::find(1);
        dump($book);
    }


    public function create()
    {
        $postsArr = [
            [
                'books' => 'book1',


            ],
            [
                'books' => 'book1',

            ],
        ];
        Book::create([   // это для создания таблицы
            'books' => 'book1',
        ]);


        dd('created');
    }
}
