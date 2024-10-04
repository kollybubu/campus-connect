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
                'image' => 'ai_future.jpg',
                'category_id' => 1, // Technology
                'user_id' => 1, // Admin user
            ],
            [
                'title' => 'Top 5 Trends in Online Education',
                'content' => 'An overview of the latest trends shaping the future of online education.',
                'image' => 'online_education_trends.jpg',
                'category_id' => 2, // Education
                'user_id' => 1, // Admin user
            ],
            [
                'title' => 'How to Improve Mental Wellness',
                'content' => 'Simple strategies to improve mental health and achieve a balanced life.',
                'image' => 'mental_wellness_tips.jpg',
                'category_id' => 3, // Health & Wellness
                'user_id' => 1, // Admin user
            ],
            [
                'title' => 'The Essentials of Starting an Online Business',
                'content' => 'A guide for new entrepreneurs looking to establish a strong online business.',
                'image' => 'online_business_essentials.jpg',
                'category_id' => 4, // Business
                'user_id' => 1, // Admin user
            ],
            [
                'title' => 'Upcoming Entertainment Events in 2024',
                'content' => 'A list of major entertainment events, festivals, and releases to look forward to in 2024.',
                'image' => 'entertainment_events_2024.jpg',
                'category_id' => 5, // Entertainment
                'user_id' => 1, // Admin user
            ],
        ];

        foreach($posts as $post)
        {
            Post::create($post);
        }
    }
}
