<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    function index()
    {
        $moviesData = Movie::all();
        // dump($moviesData[0]->title);
        return view("movies.index", ["moviesData" => $moviesData]);
    }
}
