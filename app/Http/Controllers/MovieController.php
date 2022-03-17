<?php

namespace App\Http\Controllers;

use App\Movie;

class MovieController extends Controller
{
    //movies
    public function index()
    {
        $movies = Movie::all();
        dd($movies);
        return view('books.index', compact('movies'));
    }
}
