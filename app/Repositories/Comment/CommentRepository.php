<?php

namespace App\Repositories\Comment;

use App\Models\Comment;

class CommentRepository implements CommentRepositoryInterface
{
    public function index()
    {
        $comments = Comment::latest()->take(3)->get();
        return $comments;
    }
}