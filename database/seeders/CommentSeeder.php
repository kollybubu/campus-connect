<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comments = [
            [
                'comment' => 'This is a very insightful post, thanks for sharing!',
                'user_id' => 7,
                'post_id' => 1,
            ],
            [
                'comment' => 'I have a question about the content, could you clarify?',
                'user_id' => 8,
                'post_id' => 2,
            ],
            [
                'comment' => 'Great work! This post helped me a lot.',
                'user_id' => 9,
                'post_id' => 3,
            ],
            [
                'comment' => 'I think there are some points missing here.',
                'user_id' => 10,
                'post_id' => 4,
            ],
            [
                'comment' => 'Thanks for this post, very helpful!',
                'user_id' => 11,
                'post_id' => 5,
            ],
            [
                'comment' => 'I enjoyed reading this, well written!',
                'user_id' => 12,
                'post_id' => 1,
            ],
            [
                'comment' => 'I disagree with some of the conclusions drawn here.',
                'user_id' => 13,
                'post_id' => 2,
            ],
            [
                'comment' => 'Fantastic post! Keep up the good work.',
                'user_id' => 14,
                'post_id' => 3,
            ],
            [
                'comment' => 'This is a very informative post, thanks for sharing!',
                'user_id' => 15,
                'post_id' => 4,
            ],
            [
                'comment' => 'I will definitely apply these ideas to my project.',
                'user_id' => 16,
                'post_id' => 5,
            ],
        ];

        foreach($comments as $comment)
        {
            Comment::create($comment);
        }
        
    }
}
