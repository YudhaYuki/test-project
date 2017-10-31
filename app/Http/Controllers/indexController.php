<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    public function my_books_homepage()
    {
        $view = view('homepage');
        return $view;
    }

}
