<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class WallController extends Controller
{
    function index()
    {
        $posts= Post::paginate(5);
    	return view('wall', ['posts'=> $posts]);
    }

    function create(Request $request)
    {
    	$post = new Post;
    	$post->content = $request->content;
    	$post->user_id = Auth::id();
    	$post->save();
        return redirect('wall');
    }

    function update(Request $request)
    {
        $post = Post::find($request->id_post);

        return view('updatePost', ['post' => $post]);
    }

    //mise à jour du post
    function save(Request $request)
    {
       $post = Post::find($request->id);
       $post->content = $request->content;
       $post->save();

       return redirect('wall');
    }

    function delete(Request $request)
    {
        $post = Post::find($request->id_post);
        $post->delete();
        return redirect('wall')->with('status', 'Post deleted !');
    }
}




