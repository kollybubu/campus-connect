<?php

namespace App\Repositories\Project;

use App\Models\Project;

class ProjectRepository implements ProjectRepositoryInterface
{
    public function index()
    {
        $projects = Project::all();
        return $projects;
    }
}