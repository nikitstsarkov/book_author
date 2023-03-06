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

Route::get('/main', 'MainController@view')->name('main.view');
//Route::get('/authors', 'AuthorsController@view')->name('author.view');

Route::get('/book', 'BookController@view')->name('book.view');  //реализация 4 пункта выдачи view book надо красиво оформить
Route::get('/book/create', 'BookController@create')->name('book.create');
Route::post('/book', 'BookController@store')->name('book.store');
Route::get('/book/{book}', 'BookController@show')->name('book.show'); //реализация вывода книги по id
Route::get('/book/{book}/edit', 'BookController@edit')->name('book.edit');
Route::patch('/book/{book}', 'BookController@update')->name('book.update');
Route::delete('/book/{book}', 'BookController@destroy')->name('book.delete');

Route::get('/author', 'AuthorController@view')->name('author.view');
Route::get('/author/create', 'AuthorController@create')->name('author.create');
Route::post('/author', 'AuthorController@store')->name('author.store');
Route::get('/author/{author}', 'AuthorController@show')->name('author.show');
Route::get('/author/{author}/edit', 'AuthorController@edit')->name('author.edit');
Route::patch('/author/{author}', 'AuthorController@update')->name('author.update');
Route::delete('/author/{author}', 'AuthorController@destroy')->name('author.delete');





//еще где то вывести список авторов с указание количества книг в первую часть задания



