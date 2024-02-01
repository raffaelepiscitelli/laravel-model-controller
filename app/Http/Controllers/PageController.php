<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Movie;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index () {
        $movies = Movie::all();
        return view('admin.movies.index', ['movies' => $movies]);
    }
}
