<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFilterRequest;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(ProductFilterRequest $request)
    {
        $data = $request->validated();

        $query = Product::query()->with('category');

        if (isset($data['category_id'])) {
            $query->where('category_id', $data['category_id']);
        }

        $categories = Category::get();
        $products = Product::with(['pictures', 'brand'])->paginate(2);


        return view('home', compact(['categories', 'products']));
    }
}
