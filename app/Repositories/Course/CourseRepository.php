<?php

namespace App\Repositories\Course;

use App\Models\Course;

class CourseRepository implements CourseRepositoryInterface
{
    public function index()
    {
        $courses = Course::latest()->get();
        return $courses;
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        return $course;
    }

    public function showCourseWithCategory($id)
    {
        $courses = Course::where('category_id', '=', $id)->get();
        return $courses;
    }
}