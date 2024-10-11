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
                'title' => 'The Future of Artificial Intelligence Event',
                'content' => 'This post explores the advancements in AI technology and its potential impact on various industries.',
                'type' => 'Event',
                'image' => 'AIFI.png',
                'category_id' => 3, // Technology
                'user_id' => 1, // Admin user
            ],
            [
                'title' => 'Online Learning Trends in 2024',
                'content' => 'This article discusses emerging trends in online education, including virtual classrooms, gamified learning, and interactive platforms.',
                'Type' => 'article',
                'image' => 'webpnet_resizeimage_30_52035b_5e4ff10867.jpg',
                'category_id' => 1, // Education
                'user_id' => 3, // User is not Admin, so category_id cannot be 3
            ],
            [
                'title' => 'Top 10 Movies to Watch This Year',
                'content' => 'A curated list of must-watch movies this year, ranging from blockbuster hits to indie gems.',
                'Type' => 'list',
                'image' => 'Top_Movies.png',
                'category_id' => 2, // Entertainment
                'user_id' => 4, // User is not Admin, so category_id cannot be 3
            ],
            [
                'title' => '2024 Summer Music Festival Preview',
                'content' => 'An overview of the biggest music festivals happening in the summer of 2024, highlighting key performers and venues.',
                'Type' => 'upcoming',
                'image' => 'Summer_Music_Festival.png',
                'category_id' => 3, // Event
                'user_id' => 1, // Admin user
            ],
            [
                'title' => 'The Future of Higher Education',
                'content' => 'This article examines how universities are adapting to new teaching models and technologies to better prepare students for the future.',
                'Type' => 'article',
                'image' => 'Higher_Education.png',
                'category_id' => 1, // Education
                'user_id' => 2, // User is not Admin, so category_id cannot be 3
            ],
            [
                'title' => 'Top 5 TV Shows You Should Binge-Watch',
                'content' => 'A list of the best TV shows available to stream, with reviews and recommendations for different genres.',
                'Type' => 'list',
                'image' => 'TV_Shows.png',
                'category_id' => 2, // Entertainment
                'user_id' => 3, // User is not Admin, so category_id cannot be 3
            ],
            [
                'title' => 'Winter Charity Gala 2024',
                'content' => 'An upcoming charity gala event to support local nonprofits, with live performances, auctions, and networking opportunities.',
                'Type' => 'upcoming',
                'image' => 'Charity_Gala.png',
                'category_id' => 3, // Event
                'user_id' => 1, // Admin user
            ],
            

        ];

        foreach($posts as $post)
        {
            Post::create($post);
        }
    }
}
