<?php

namespace App\Repositories\Resource;

use App\Models\Resource;

class ResourceRepository implements ResourceRepositoryInterface
{
    public function index()
    {
        $resources = Resource::all();
        return $resources;
    }
}
