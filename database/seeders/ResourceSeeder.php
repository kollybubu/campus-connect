<?php

namespace Database\Seeders;

use App\Models\Resource;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $resources = [
            [
                'user_id' => 1,
                'course_id' => 1,
                'name' => 'Advanced PHP Techniques',
                'description' => 'A document covering advanced PHP programming concepts.',
                'type' => 'document',
                'url' => 'https://example.com/advanced-php-techniques.pdf'
            ],
            [
                'user_id' => 1,
                'course_id' => 2,
                'name' => 'Database Optimization Guide',
                'description' => 'Best practices for optimizing MySQL database performance.',
                'type' => 'document',
                'url' => 'https://example.com/db-optimization.pdf'
            ],
            [
                'user_id' => 1,
                'course_id' => 3,
                'name' => 'REST API Best Practices',
                'description' => 'A video tutorial on building REST APIs with Laravel.',
                'type' => 'video',
                'url' => 'https://example.com/rest-api-best-practices'
            ],
            [
                'user_id' => 1,
                'course_id' => 4,
                'name' => 'Introduction to Machine Learning',
                'description' => 'An introductory video on machine learning concepts.',
                'type' => 'video',
                'url' => 'https://example.com/intro-to-ml'
            ],
            [
                'user_id' => 1,
                'course_id' => 5,
                'name' => 'Understanding Web Security',
                'description' => 'A guide on how to secure web applications.',
                'type' => 'document',
                'url' => 'https://example.com/web-security.pdf'
            ],
            [
                'user_id' => 1,
                'course_id' => 1,
                'name' => 'Building Scalable Applications',
                'description' => 'A link to resources on scaling web applications.',
                'type' => 'link',
                'url' => 'https://example.com/scalable-apps'
            ],
            [
                'user_id' => 1,
                'course_id' => 2,
                'name' => 'Introduction to Cloud Computing',
                'description' => 'A comprehensive video on cloud computing fundamentals.',
                'type' => 'video',
                'url' => 'https://example.com/intro-to-cloud'
            ],
            [
                'user_id' => 1,
                'course_id' => 3,
                'name' => 'Version Control with Git',
                'description' => 'An in-depth guide on using Git for version control.',
                'type' => 'document',
                'url' => 'https://example.com/git-version-control.pdf'
            ],
            [
                'user_id' => 1,
                'course_id' => 4,
                'name' => 'Advanced JavaScript Patterns',
                'description' => 'A video on advanced JavaScript patterns and best practices.',
                'type' => 'video',
                'url' => 'https://example.com/advanced-js-patterns'
            ],
            [
                'user_id' => 1,
                'course_id' => 5,
                'name' => 'API Design Principles',
                'description' => 'A link to best practices in designing RESTful APIs.',
                'type' => 'link',
                'url' => 'https://example.com/api-design-principles'
            ]
        ];

        foreach($resources as $resource)
        {
            Resource::create($resource);
        }
    }
}
