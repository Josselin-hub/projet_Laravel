<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        /*$films = Film::where ([
            ['titre', '!=', Null],
            [function ($query) use ($request) {
            if (($term = $request->term)) {
                $query->orWhere('titre', 'LIKE', '%' . $term . '%')->get();
            }
            }]
        ])->orderBy('id_film', 'desc')
            ->paginate(20);*/
        $films = Film::searchFilms($request);
        return view('search', ['films' => $films]);
    }

}
