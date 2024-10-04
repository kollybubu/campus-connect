<?php

namespace App\Repositories\Course;

interface CourseRepositoryInterface {
    public function index();
    public function show($id);
    public function showCourseWithCategory($id);
}