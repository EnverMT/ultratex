<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CategoryStoreRequest;

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
            'parent_id' => 'numeric'
        ]);

        $input = $request->only(['title', 'isMain', 'picture_url', 'parent_id']);

        if ($request->file('picture_url')) {
            $file = request()->file('picture_url');
            $path = $file->store('images', ['disk' => 'public']);
        } else {
            $path = null;
        }

        Category::create([
            'title' => $request->title,
            'isMain' => $request->isMain ? 1 : 0,
            'parent_id' => $request->parent_id,
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
        $categories = Category::all();
        return view('category.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title' => 'required|string',
            'isMain' => 'string',
            'picture_url' => 'image|mimes:png,jpg,jpeg',
            'parent_id' => 'numeric'
        ]);

        $input = $request->only(['title', 'isMain', 'picture_url', 'parent_id']);

        if ($request->file('picture_url')) {
            $file = request()->file('picture_url');
            $path = $file->store('images', ['disk' => 'public']);
            !is_null($category->picture_url) && Storage::delete($category->picture_url);
        } else {
            $path = null;
        }

        $category->fill([
            'title' => $request->title,
            'isMain' => $request->isMain ? 1 : 0,
            'parent_id' => $request->parent_id,
            'picture_url' => $path ?? $category->picture_url
        ])->save();

        return redirect()->route('category.index')->with('success', 'category updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $url = '/public/' . $category->picture_url;
        !is_null($category->picture_url) && Storage::delete($url);

        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category has been deleted');
    }
}
