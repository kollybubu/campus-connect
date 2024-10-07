<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Repositories\Post\PostRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends BaseController
{
    private PostRepositoryInterface $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $posts = $this->postRepository->index();
        $posts = PostResource::collection($posts);
        return $this->sendResponse($posts, 'Posts Retrived Successfully!');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|image',
            'category_id' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()){
            return $this->sendError('validation Error', $validator->errors(), 422);
        }

        if($request->hasFile('image')){
            $imageName= time() . '.' . $request->image->extension();
            $request->image->move(public_path('PostImage'), $imageName);
        }

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imageName,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,

        ]);
        return $this->sendResponse($post, 'product Created Successfully', 201);
    }
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|image',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error', $validator->errors());
        }
        $Post = Post::find($id);
        if(!$Post) {
            return $this->sendError("Post not Found!", null, 404);
        }
        $Post->update($request->all());
        return $this->sendResponse($Post, 'Post Updated Successfully', 200);
    }

    public function destory(string $id)
    {
        $Post = Post::where('id', $id)->first();
        if(!$Post){
            return $this->sendError("Post not found", null, 404);

        }
        $Post->delete();
        return $this->sendResponse($Post, "Post Destory Successfully");
    }
}
