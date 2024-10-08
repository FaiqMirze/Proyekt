<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create',);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {
        $category= new Category();
        $category->name=request('name');
        $category->slug=Str::slug($request->input('name'));
        $category->save();
        return redirect()->route('admin.category.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category=Category::find($id);
        return view('admin.category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }
    /** * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request, string $id)
{
    $category = Category::find($id);
    $category->name = $request->input('name');
    $category->slug = Str::slug($request->input('name'));
    $category->save();
    return redirect()->route('admin.category.index')->with('success', 'Category updated successfully');}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category= Category::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.category.index')->with('success', 'Category deleted successfully');
    }


}
