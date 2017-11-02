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

        $all_authors = TheAuthor::orderBy('name', 'asc')->get();

        $view->authors = $all_authors;

        return $view;
    }

    public function author_detail($id)
    {
        $view = view('authors/author_detailing');

        $author = TheAuthor::find($id);

        $view->author = $author;

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

    public function create_author()
    {
        $view = view('authors/author_edit');

        return $view;
    }

    public function store($id = null)
    {
        $request = request();

        if($request->has('name'))
        {
            $name = $request->input('name');
        }

        $request->all(); // all request data
        
        $request_data = $request->only([ // only those request items that are present in the array
            'name',
            'year_of_birth',
            'biography'
        ]);
        
        $request_data = $request->except([ // everything except the items that are present in the array
            '_toke',
            'biography'
        ]);
        
        
        // create new object of class Movie
        $author = new TheAuthor();

        $author->fill($request->all());        
        $author->save();

        // we can also use this instead of $author->fill($request->all()); 
        // add some data from request into this object
        // $author->fill($request->only([
        //     'name',
        //     'year_of_birth',
        //     'biography'
        // ]));

        dd($author);


        
    }

    public function edit($id)
    {
        $author = TheAuthor::findOrFail($id);

        $view = view('authors/edit'); 
        $view->author = $author;
        
        return $view;
    }


}
