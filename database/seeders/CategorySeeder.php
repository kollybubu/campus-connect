<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Technology',
                'description' => 'Everything related to technology, gadgets, and innovations.',
            ],
            [
                'name' => 'Education',
                'description' => 'Topics related to learning, teaching, and educational resources.',
            ],
            [
                'name' => 'Health & Wellness',
                'description' => 'Categories focusing on physical and mental health, fitness, and wellness tips.',
            ],
            [
                'name' => 'Business',
                'description' => 'Business strategies, entrepreneurship, and corporate management content.',
            ],
            [
                'name' => 'Entertainment',
                'description' => 'Content focused on movies, music, games, and pop culture.',
            ],
        ];

        foreach($categories as $category)
        {
            Category::create($category);
        }
        
    }
}
