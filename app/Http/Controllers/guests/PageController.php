<?php

namespace App\Http\Controllers\guests;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $films = Movie::all();
        //dd($films);
        // $films = Movie::where('vote', '>', 9)->get();
        // $films = Movie::where('vote', '<', 9)->get();
        // $films = Movie::where('vote', '>', 9)->orderBy('date', 'desc')->get();
        // $films = Movie::where('vote', '>', 9)->orderBy('date', 'asc')->get();
        // $films = Movie::where('vote', '<', 9)->orderBy('date', 'asc')->limit(3)->get();
        //$films = Movie::where('vote', '>', 8)->orderBy('date', 'desc')->paginate(10);
        //$films = Movie::where('vote', '>', 9)->first();
        return view('home', compact('films'));
        //return view('home');
    }

    public function single()
    {
        //dd($films);
        //$film = Movie::where('vote', '>', 9)->first();
        $film = Movie::find(8);
        return view('single', compact('film'));
    }


}
