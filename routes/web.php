<?php

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

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/home', 'libraryhomecontroller@index')->name('face');

//Route::get('/create', 'studentcontroller@create')->name('home'); model
//
//Route::post('/save', 'studentcontroller@save')->name('save');  model
//Route::resource('student','studentcontroller');

Route::get('/save', 'studentcontroller@index')->name('home');
Route::post('/save', 'studentcontroller@save')->name('save');

Route::get('/book', 'bookcontroller@book')->name('book');
Route::post('/book', 'bookcontroller@upload')->name('upload');

//Route::get('/borrow', 'borrowcontroller@borrow')->name('borrow');

Route::get('/borrow', 'borrowcontroller@book')->name('borrow');
Route::post('/update/{id}', 'borrowcontroller@update')->name('update');