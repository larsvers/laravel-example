<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class FilmsController extends Controller
{
    public function index()
    {
        $films = Film::all();

        // info(gettype($films));
    
        // return view('filmSite', compact('films'));
        return $films;
    }
}
