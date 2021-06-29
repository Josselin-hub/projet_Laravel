<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
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
        $posts= Post::paginate(5);
        return view('dashboard', ['posts'=> $posts]);
    }
}
