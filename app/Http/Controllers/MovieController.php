<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Request;
use App\Movie;

class MovieController extends Controller
{
    function index()
    {
        $activeFilter = Request::query()["filter"] ?? "";
        $moviesData = Movie::all();
        $newMovie = new Movie;
        $columns = $newMovie->getTableColumns();
        $moviesData = Movie::all();
        if ($activeFilter <> "") {
            $moviesData = Movie::orderBy($activeFilter)->get();
        }

        // print_r($columns);
        // dump($moviesData->);
        return view("movies.index", ["moviesData" => $moviesData, "filterList" => $columns, "activeFilter" => $activeFilter]);
    }
}
