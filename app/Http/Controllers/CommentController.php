<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Models\Comment;
use App\Models\Post;
use App\Repositories\Comment\CommentRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
    public function store(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(), [
            'comment' => 'required|string',
            'post_id' => 'required|integer',
        ]);
            if ($validator->fails()){
                return $this->sendError('validation Error', $validator->errors(), 422);
            }


        $Comment = Comment::create([
            'comment' => $request->comment,
            'user_id' => Auth::user()->id,
            'post_id' => $request->post_id,

        ]);
        return $this->sendResponse($Comment, 'product Created Successfully', 201);
    }
    public function show(string $id)
    {
        $data = Comment::where('id',Auth::user()->id)->get();
        if (!$data) {
            return $this->sendError('Post Not Found!', null, 404);

        }
        $posts = CommentResource::collection($data);
        return $this-> sendResponse($posts, 'Posts Retrived Successfully!');
    }
    

    public function destory(string $id)
    {
        $Comment = Comment::where('id', $id)->first();
        if(!$Comment){
            return $this->sendError("Comment not found", null, 404);

        }
        $Comment->delete();
        return $this->sendResponse($Comment, "Comment Destory Successfully");
    }
}

