<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'The Future of Artificial Intelligence',
                'content' => 'This post explores the advancements in AI technology and its potential impact on various industries.',
                'image' => 'AIFI.png',
                'category_id' => 1, // Technology
                'user_id' => 1, // Admin user
            ],
            [
                'title' => 'Top 5 Trends in Online Education',
                'content' => 'An overview of the latest trends shaping the future of online education.',
                'image' => 'top-5.jpg',
                'category_id' => 1, // Education
                'user_id' => 1, // Admin user
            ],
            [
                'title' => 'Upcoming Entertainment Events in 2024',
                'content' => 'A list of major entertainment events, festivals, and releases to look forward to in 2024.',
                'image' => 'upcomin.png',
                'category_id' => 3, // Entertainment
                'user_id' => 1, // Admin user
            ],
        ];

        foreach($posts as $post)
        {
            Post::create($post);
        }
    }
}
