<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();
        
        return view('posts', [
            'posts' => $posts
        ]);
    }



    
    public function create()
    {
        return view('create');
    }

    function save(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->cont = $request->cont;
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect()->route('posts');
    }
}
