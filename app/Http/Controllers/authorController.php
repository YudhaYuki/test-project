<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TheAuthor;

class authorController extends Controller
{
    //
    public function author_list()
    {
        $view = view('authors/author_listing');

        $all_authors = TheAuthor::all();
        $view->authors = $all_authors;
        
        return $view;
    }

    public function author_detail()
    {
        $view = view('authors/author_detailing');
        return $view;
    }

    public function insert_new_author()
    {
        // create an object of the model class
        $author = new TheAuthor();

        // modify it's properties
        $author->name = 'AYN RAND';
        $author->year_of_birth = 1905 ;
        $author->biography = 
        'Ayn Rand born Alisa Zinov yevna Rosenbaum, Russian: Али́са Зино́вьевна Розенба́ум; was a Russian-American novelist, philosopher, playwright, and screenwriter. She is known for her two best-selling novels, The Fountainhead and Atlas Shrugged, and for developing a philosophical system she called Objectivism. Educated in Russia, she moved to the United States in 1926. She had a play produced on Broadway in 1935–1936. After two early novels that were initially unsuccessful in America, she achieved fame with her 1943 novel, The Fountainhead.';

        // save the object
        // $author->save();

        //happily inform the user
        return 'Movie was saved!';
    }

}
