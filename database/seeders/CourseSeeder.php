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
                'name' => 'PHP',
                'description' => 'PHP is a self-referentially acronym for PHP: Hypertext Preprocessor. Original it supposedly meant personal home page. It is an open source, server-side, HTML embedded scripting language used to create dynamic Web pages.',
                'image' => 'programming_intro.jpg',
                'user_id' => 1, // Faculty user
                'category_id' => 1, // Replace with appropriate category ID
            ],
            [
                'name' => 'Java',
                'description' => 'Java is a multi-platform, object-oriented, and network-centric language that can be used as a platform in itself. It is a fast, secure, reliable programming language for coding everything from mobile apps and enterprise software to big data applications and server-side technologies.',
                'image' => 'web_development_bootcamp.jpg',
                'user_id' => 1, // Faculty user
                'category_id' => 2, // Replace with appropriate category ID
            ],
        ];


        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
