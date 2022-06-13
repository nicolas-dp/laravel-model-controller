<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        //dd($movies);
        return view('home', compact('movies'));
    }

  /*   public function search($searchText)
    {
        $search = Movie::table('movies')->where('title', $searchText)->get();
        //dd($search);

        return view('home', compact('search'));
    } */
}
