<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\ResourceResource;
use App\Repositories\Resource\ResourceRepositoryInterface;
use Illuminate\Http\Request;

class ResourceController extends BaseController
{
    private ResourceRepositoryInterface $resourceRepository;

    public function __construct(ResourceRepositoryInterface $resourceRepository)
    {
        $this->resourceRepository = $resourceRepository;
    }

    public function index()
    {
        $resources = $this->resourceRepository->index();
        $resources = ResourceResource::collection($resources);
        return $this->sendResponse($resources, 'Resource Retrived Successfully!');
    }
}
