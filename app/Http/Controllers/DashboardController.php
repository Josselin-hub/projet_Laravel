<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Database\Query\Builder;
use DB;
/**
 * Class DashboardController
 * @package App\Http\Controllers
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    function index()
    {

        $lastFilms = Film::getLastFilms();
        //dd($lastFilms);
        $lastcomments = Post::getCommentairesByLastFilms();
        //dd($lastcomments);
        return view('dashboard', ['lastfilm'=> $lastFilms], ['lastcomments' => $lastcomments]);

    }
}
