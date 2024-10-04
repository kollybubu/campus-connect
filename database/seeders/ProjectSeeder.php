<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            // Course 1 - Introduction to Programming
            [
                'name' => 'Basic Calculator Application',
                'description' => 'Developing a simple calculator application using Python.',
                'image' => 'basic_calculator.jpg',
                'course_id' => 1,
                'start_date' => '2024-10-01',
                'end_date' => '2024-11-15',
            ],
            [
                'name' => 'Quiz Application',
                'description' => 'Creating an interactive quiz application to test knowledge on various topics.',
                'image' => 'quiz_application.jpg',
                'course_id' => 1,
                'start_date' => '2024-10-05',
                'end_date' => '2024-11-20',
            ],
        
            // Course 2 - Web Development Bootcamp
            [
                'name' => 'Responsive Portfolio Website',
                'description' => 'Building a personal portfolio website that is responsive and visually appealing.',
                'image' => 'portfolio_website.jpg',
                'course_id' => 2,
                'start_date' => '2024-10-10',
                'end_date' => '2024-11-25',
            ],
            [
                'name' => 'Blog Platform',
                'description' => 'Creating a blog platform where users can create, edit, and delete posts.',
                'image' => 'blog_platform.jpg',
                'course_id' => 2,
                'start_date' => '2024-10-15',
                'end_date' => '2024-12-01',
            ],
        
            // Course 3 - Data Science Fundamentals
            [
                'name' => 'Customer Segmentation Analysis',
                'description' => 'Analyzing customer data to identify different segments for targeted marketing.',
                'image' => 'customer_segmentation.jpg',
                'course_id' => 3,
                'start_date' => '2024-10-01',
                'end_date' => '2024-11-30',
            ],
            [
                'name' => 'Predictive Analytics Project',
                'description' => 'Building predictive models to forecast sales using historical data.',
                'image' => 'predictive_analytics.jpg',
                'course_id' => 3,
                'start_date' => '2024-10-05',
                'end_date' => '2024-12-05',
            ],
        
            // Course 4 - Digital Marketing Strategies
            [
                'name' => 'Social Media Marketing Plan',
                'description' => 'Creating a comprehensive marketing plan for social media campaigns.',
                'image' => 'social_media_plan.jpg',
                'course_id' => 4,
                'start_date' => '2024-10-10',
                'end_date' => '2024-11-15',
            ],
            [
                'name' => 'SEO Optimization Project',
                'description' => 'Implementing SEO strategies to improve website visibility and traffic.',
                'image' => 'seo_optimization.jpg',
                'course_id' => 4,
                'start_date' => '2024-10-20',
                'end_date' => '2024-12-10',
            ],
        
            // Course 5 - Introduction to Psychology
            [
                'name' => 'Behavioral Study Project',
                'description' => 'Conducting a study to analyze human behavior in different situations.',
                'image' => 'behavioral_study.jpg',
                'course_id' => 5,
                'start_date' => '2024-10-05',
                'end_date' => '2024-12-20',
            ],
            [
                'name' => 'Psychological Impact of Social Media',
                'description' => 'Researching how social media affects mental health and interpersonal relationships.',
                'image' => 'social_media_impact.jpg',
                'course_id' => 5,
                'start_date' => '2024-09-30',
                'end_date' => '2024-12-30',
            ],
        ];

        foreach($projects as $project)
        {
            Project::create($project);
        }
    }
}
