<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Repositories\Comment\CommentRepositoryInterface;
use Illuminate\Http\Request;

class CommentController extends BaseController
{

    private CommentRepositoryInterface $commentRepository;

    public function __construct(CommentRepositoryInterface $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function index()
    {
        $comments = $this->commentRepository->index();
        $comments = CommentResource::collection($comments);
        return $this->sendResponse($comments, 'Comment Retrived Successfully!');
    }
}
