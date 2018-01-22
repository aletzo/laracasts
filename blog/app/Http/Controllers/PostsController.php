<?php

namespace App\Http\Controllers;

use App\Post;
use App\Repositories\Posts;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['index', 'show']
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function index(Posts $posts)
    {
        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function store()
    {
        $this->validate(request(), [
            'body'  => 'required',
            'title' => 'required'
        ]);

        \Auth::user()->publish(
            new Post(request(['body', 'title']))
        );

        return redirect('posts');
    }

}
