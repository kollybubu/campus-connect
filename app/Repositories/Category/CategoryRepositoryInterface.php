<?php

namespace App\Repositories\Category;

interface CategoryRepositoryInterface
{
    public function index();
    public function store($request);
    public function update(array $data, string $id);
}