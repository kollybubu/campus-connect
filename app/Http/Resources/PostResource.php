<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' =>$this->id,
            'user_id'=>$this->user->id,
            'title' => $this->title,
            'content' => $this->content,
            'image' => asset('PostImage/' . $this->image),
            'category' => $this->category->name,
            'created_by' => $this->user->name,
            'date' => $this->created_at->diffForHumans(),
            'comments' => $this->comments->map(function($comment) {
                return [
                    'id' => $comment->id,
                    'comment' => $comment->comment,
                    'commentCreateId' => $comment->user_id,
                    'created_by' => $comment->user->name,
                    'created_at' => $comment->created_at->diffForHumans()
                ];
            })
        ];
    }
}
