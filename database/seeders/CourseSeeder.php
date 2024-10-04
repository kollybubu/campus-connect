<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'name' => 'Introduction to Programming',
                'description' => 'A beginner-friendly course covering the fundamentals of programming using Python.',
                'image' => 'programming_intro.jpg',
                'user_id' => 2, // Faculty user
                'category_id' => 1, // Replace with appropriate category ID
            ],
            [
                'name' => 'Web Development Bootcamp',
                'description' => 'An intensive course designed to teach you full-stack web development with HTML, CSS, JavaScript, and more.',
                'image' => 'web_development_bootcamp.jpg',
                'user_id' => 3, // Faculty user
                'category_id' => 2, // Replace with appropriate category ID
            ],
            [
                'name' => 'Data Science Fundamentals',
                'description' => 'Learn the basics of data science, including data analysis, visualization, and machine learning techniques.',
                'image' => 'data_science_fundamentals.jpg',
                'user_id' => 4, // Faculty user
                'category_id' => 3, // Replace with appropriate category ID
            ],
            [
                'name' => 'Digital Marketing Strategies',
                'description' => 'Explore effective digital marketing strategies and tools to boost your online presence.',
                'image' => 'digital_marketing.jpg',
                'user_id' => 5, // Faculty user
                'category_id' => 4, // Replace with appropriate category ID
            ],
            [
                'name' => 'Introduction to Psychology',
                'description' => 'An overview of psychological principles and theories, focusing on human behavior and mental processes.',
                'image' => 'psychology_intro.jpg',
                'user_id' => 6, // Faculty user
                'category_id' => 5, // Replace with appropriate category ID
            ],
        ];
        
        
        foreach($courses as $course)
        {
            Course::create($course);
        }
    }
}
