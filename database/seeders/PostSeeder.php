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
                'category_id' => 1, 
                'user_id' => 1, 
            ],
            [
                'title' => 'Online Learning Trends in 2024',
                'content' => 'This article discusses emerging trends in online education, including virtual classrooms, gamified learning, and interactive platforms.',
                'Type' => 'article',
                'image' => 'Onlinelearning.jpg',
                'category_id' => 1, 
                'user_id' => 3,
            ],
            [
                'title' => 'Top 10 Movies to Watch This Year',
                'content' => 'A curated list of must-watch movies this year, ranging from blockbuster hits to indie gems.',
                'Type' => 'normal',
                'image' => 'CinemaClubs.png',
                'category_id' => 2, 
                'user_id' => 4, 
            ],
            [
                'title' => '2024 Summer Music Festival Preview',
                'content' => 'An overview of the biggest music festivals happening in the summer of 2024, highlighting key performers and venues.',
                'Type' => 'event',
                'image' => 'summerMF.jpg',
                'category_id' => 2, 
                'user_id' => 1, 
            ],
            [
                'title' => 'The Future of Higher Education',
                'content' => 'This article examines how universities are adapting to new teaching models and technologies to better prepare students for the future.',
                'Type' => 'normal',
                'image' => 'maxresdefault.jpg',
                'category_id' => 1, 
                'user_id' => 2, 
            ],
            [
                'title' => 'Top 5 TV Shows You Should Binge-Watch',
                'content' => 'A list of the best TV shows available to stream, with reviews and recommendations for different genres.',
                'Type' => 'normal',
                'image' => 'maxresdefault(1).jpg',
                'category_id' => 2,
                'user_id' => 3, 
            ],
            [
                'title' => 'Winter Charity Gala 2024',
                'content' => 'An upcoming charity gala event to support local nonprofits, with live performances, auctions, and networking opportunities.',
                'Type' => 'event',
                'image' => 'charitygala.jpg',
                'category_id' => 2, 
                'user_id' => 1,
            ],

            

        ];

        foreach($posts as $post)
        {
            Post::create($post);
        }
    }
}
