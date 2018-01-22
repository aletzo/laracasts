<?php

namespace App\Repositories;

use App\Post;

class Posts
{

    public function __construct()
    {
        
    }
    
    public function all()
    {
        return Post::all();
    }

    public function find()
    {
    
    }

}
