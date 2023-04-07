<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public $categories;
    public $subcategories;
    public $products;

    public function mount()
    {
        $this->categories = Category::where('isMain', true)->get();
        $this->subcategories = Category::where('isMain', false)->get();
        $this->products = Product::get();
    }

    public function filterCategory(int $categoryId = null, int $subcategoryID = null)
    {
        if ($categoryId == null && $subcategoryID == null) {
            return;
        }

        if ($subcategoryID == null) {
            $this->products = Product::with(['pictures', 'brand', 'brand.category', 'brand.category.parent'])
                ->whereRelation('brand.category.parent', 'id', '=', $categoryId)
                ->get();
        } else {
            $this->products = Product::with(['pictures', 'brand', 'brand.category', 'brand.category.parent'])
                ->whereRelation('brand.category', 'id', '=', $categoryId)
                ->get();
        }
    }

    public function render()
    {
        return view('livewire.products');
    }
}
