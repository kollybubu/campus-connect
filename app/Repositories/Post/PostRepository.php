<?php

namespace App\Repositories\Post;

use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    public function index()
    {
    
        $posts = Post::with('category')->get();

      
        return $posts;
    }
}