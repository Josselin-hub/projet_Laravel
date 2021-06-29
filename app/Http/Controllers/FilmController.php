<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;


class FilmController extends Controller
{
    function index()
    {
        $films= Film::paginate(50);
        return view('films', ['films'=> $films]);
    }

    function show(Request $request)
    {
        $film = Film::find($request->id_film);
        return view('film', ['film'=> $film]);
    }
}
