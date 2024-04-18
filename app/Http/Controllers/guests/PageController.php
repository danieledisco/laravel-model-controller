<?php

namespace App\Http\Controllers\guests;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $films = Movie::all();
        dd($films);
        return view('guests.home', compact('films'));
    }
}
