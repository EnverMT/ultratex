<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'isMain' => 'string',
            'picture_url' => 'image|mimes:png,jpg,jpeg',
            'parentCategory' => 'numeric'
        ]);

        $input = $request->only(['title', 'isMain', 'picture_url', 'parentCategory']);

        if ($request->file('picture_url')) {
            $path = $request->file('picture_url')->store('images');
        } else {
            $path = null;
        }

        Category::create([
            'title' => $request->title,
            'isMain' => $request->isMain ? 1 : 0,
            'parentCategory' => $request->parentCategory,
            'picture_url' => $path
        ]);

        return redirect()->route('category.index')->with('success', 'category created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category has been deleted');
    }
}
