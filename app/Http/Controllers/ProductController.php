<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Picture;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with(['brand', 'pictures'])->get();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('product.create', compact('brands', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->all());

        if ($request->file('url')) {
            foreach ($request->file('url') as $image) {
                $path = $image->store('images', ['disk' => 'public']);
                Picture::create([
                    'product_id' => $product->id,
                    'url' => $path
                ]);
            }
        }

        return redirect()->route('product.index')->with('success', 'product created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $brands = Brand::all();
        return view('product.edit', compact('product', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //dd($request->url);
        if ($request->file('url')) {
            foreach ($request->file('url') as $image) {
                $path = $image->store('images', ['disk' => 'public']);
                Picture::create([
                    'product_id' => $product->id,
                    'url' => $path
                ]);
            }
        }

        $product->fill($request->all())->save();

        return redirect()->route('product.index')->with('success', 'product created');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $pictures = Picture::where('product_id', '=', $product->id)->get();

        foreach ($pictures as $pic) {
            $url = '/public/' . $pic->url;
            !is_null($pic->url) && Storage::delete($url);
            $pic->delete();
        }

        $product->delete();
        return redirect()->route('product.index')->with('success', 'product deleted');
    }

    public function google()
    {
        $products = Product::with(['brand', 'pictures'])->get();
        $categories = Category::get();

        return compact('products', 'categories');
    }
}
