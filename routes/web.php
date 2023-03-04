<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//первая часть задания crud
Route::get('/books', 'BookController@books');
Route::get('/books/create', 'BookController@create');
Route::get('/books/update', 'BookController@update');
Route::get('/books/delete', 'BookController@delete');


//вывод списка публичная часть
Route::get('/main', 'MainController@view')->name('main.view');
Route::get('/authors', 'AuthorsController@view')->name('author.view');

Route::get('/table', 'TableController@view')->name('book.view');  //реализация 4 пункта выдачи view book надо красиво оформить
Route::get('/table/create', 'TableController@create')->name('book.create');
Route::post('/table', 'TableController@store')->name('book.store');
Route::get('/table/{book}', 'TableController@show')->name('book.show'); //реализация вывода книги по id
Route::get('/table/{book}/edit', 'TableController@edit')->name('book.edit');
Route::patch('/table/{book}', 'TableController@update')->name('book.update');
Route::delete('/table/{book}', 'TableController@destroy')->name('book.delete');


Route::get('/book', 'BookController@book');



//еще где то вывести список авторов с указание количества книг в первую часть задания



