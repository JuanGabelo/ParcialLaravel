<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Category::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->category_is_active = $request->category_is_active;
        $category->category_priority = $request->category_priority;
        $category->save();
        return $category;
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return $category;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $category->category_name = $request->category_name ?? $category->category_name;
        $category->category_description = $request->category_description ?? $category->category_description;
        $category->category_is_active = $request->category_is_active ?? $category->category_is_active;
        $category->category_priority = $request->category_priority ?? $category->category_priority;
        $category->save();
        return $category;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json([
            'message' => 'Category deleted',
            'category' => $category
        ], 200);
    }
}
