<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    protected $categoryRepository;
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
         $this->categoryRepository = $categoryRepository;
    }
    
    public function index()
    {
        $categories = $this->categoryRepository->All();
       return view('backend.pages.category.index', compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        $this->categoryRepository->storeData($request);
        return redirect(route('category.index'))->with('message', 'Category  create successfully.');
    }

    public function edit( Category $category)
    {
        return view('backend.pages.category.edit')->with('category', $category);
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $this->categoryRepository->updateData($request, $category);
        return redirect(route('category.index'))->with('message', 'Category info Update successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect(route('category.index'))->with('message', 'Category Deleted successfully.');
    }
}
