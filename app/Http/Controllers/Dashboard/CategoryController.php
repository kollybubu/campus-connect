<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends BaseController
{
    private CategoryRepositoryInterface $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->index();
        $categories = CategoryResource::collection($categories);
        return $this->sendResponse($categories, 'Categories Retrived Successfully!');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
        ]);
        if ($validator->fails()){
            return $this->sendError('validation Error', $validator->errors(), 404);
        }
        $category = $this->categoryRepository->store($request);

        return $this->sendResponse($category, 'product Created Successfully', 200);
    }
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error', $validator->errors());
        }
        $Category = Category::find($id);
        if(!$Category) {
            return $this->sendError("Category not Found!", null, 404);
        }
        $Category->update($request->all());
        return $this->sendResponse($Category, 'Category Updated Successfully', 200);
    }

    public function show(string $id)
    {
        $data = Category::where('id',$id)->get();
        if (!$data) {
            return $this->sendError('Category Not Found!', null, 404);

        }
        $Category = CategoryResource::collection($data);
        return $this-> sendResponse($Category, 'Category Retrived Successfully!');
    }
    public function destory(string $id)
    {
        $Category = Category::where('id', $id)->first();
        if(!$Category){
            return $this->sendError("Category not found", null, 404);

        }
        $Category->delete();
        return $this->sendResponse($Category, "Category Destory Successfully");
    }

}
