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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'indexController@my_books_homepage');

Route::get('/authors/list', 'authorController@author_list');

// Route::get('/authors/author/{id}', 'authorController@author_detail');


Route::get('/authors/author/{id}', 'authorController@author_detail')->name('author detail');


Route::get('/authors/author/insert_new_author', 'authorController@insert_new_author');





Route::get('/authors/new', 'authorController@create_author');

Route::post('/authors/new', 'authorController@store');




Route::get('/authors/edit/{id}', 'authorController@edit');

Route::post('/authors/edit/{id}', 'authorController@store');



