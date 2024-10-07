<?php

namespace App\Repositories\Category;

use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function index()
    {
        $categories = Category::all();
        return $categories;
    }
    public function store($request)
    {
        return Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
    }
    public function update(array $data, string $id)
    {

        $category = $this->$data->find($id);

        if (!$category) {
            return false;
        }


        return $category->update([
            'name' => $data['name'],
            'description' => $data['description'],
        ]);
    }
}