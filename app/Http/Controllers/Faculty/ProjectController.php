<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Repositories\Project\ProjectRepositoryInterface;
use Illuminate\Http\Request;

class ProjectController extends BaseController
{
    private ProjectRepositoryInterface $projectRepository;

    public function __construct(ProjectRepositoryInterface $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    public function index()
    {
        $projects = $this->projectRepository->index();
        $projects = ProjectResource::collection($projects);
        return  $this->sendResponse($projects, 'Projects Retrived Successfully!');
    }
}
