<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class VueFunController extends Controller
{
    public function index()
    {
        $films = Film::all();
    
        return view('vueFun', compact('films'));
    }
}
