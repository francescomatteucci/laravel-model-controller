<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index() {
        return view('welcome');
    }

    public function movies() {
        $movies = Movie::all(); 
        return view('layouts.movie', compact('movies'));

    }
}