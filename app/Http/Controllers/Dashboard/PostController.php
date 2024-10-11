<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Models\User;
use App\Repositories\Post\PostRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\NullableType;
use Spatie\Permission\Models\Role;

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
            'category_id' => 'nullable|integer',
            'type' => 'string',
        ]);
            if ($validator->fails()){
                return $this->sendError('validation Error', $validator->errors(), 422);
            }

        if($request->hasFile('image')){
            $imageName= time() . '.' . $request->image->extension();
            $request->image->move(public_path('PostImage'), $imageName);
        }
        $user = Auth::user()->id;
        dd(Auth::user()->roles);

            $role = DB::table('model_has_roles')
                ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
                ->where('model_has_roles.model_id', $user)
                ->where('model_has_roles.model_type', 'App\\Models\\User') 
                ->select('roles.name') 
                ->first();

            if ($role && $role->name === 'admin') {
                $postType = $request->type === 'event' ? 'event' : 'normal';
            } else {
                $postType = 'normal';
            }

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imageName,
            'category_id' => $request->category_id,
            'user_id' => $user,
            'type' => $postType
        ]);

        return $this->sendResponse($post, 'product Created Successfully', 201);
    }
    public function show(string $id)
    {
        $data = Post::where('id',$id)->get();
        if (!$data) {
            return $this->sendError('Post Not Found!', null, 404);

        }
        $posts = PostResource::collection($data);
        return $this-> sendResponse($posts, 'Posts Retrived Successfully!');
    }
    
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'content' => 'required|string',
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
        $Post->comments()->delete();


        $Post->delete();
        return $this->sendResponse($Post, "Post Destory Successfully");
    }

    public function postByUserId(Request $request)
    {
        $post = Post::where('user_id', Auth::user()->id)->get();

        $post = PostResource::collection($post);
        return $this->sendResponse($post, "Post Retrieved Successfully", 200);
    }
    public function postBytype(Request $request)
    {
        $posts = Post::where('type', 'event');


        $posts = PostResource::collection($posts);

        return $this->sendResponse($posts, "Event Posts Retrieved Successfully", 200);
    }
    
}
