<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;

class CommentsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Post $post)
    {
        $this->validate(request(), [
            'body'  => 'required'
        ]);

        $post->addComment(
            request('body'),
            \Auth::user()->id
        );

        return back();
    }

}
