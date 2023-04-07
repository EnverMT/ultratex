<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public $selectedCategory = null;
    public $selectedSubCategory = null;

    public $categories;
    public $subcategories;

    public function mount()
    {
        $this->categories = Category::where('isMain', true)->get();
        $this->subcategories = Category::where('isMain', false)->get();
    }

    public function selectCategory(int $selectedCategory = null)
    {
        $this->selectedCategory = $selectedCategory;
    }

    public function render()
    {
        $query = Product::with(['pictures', 'brand', 'brand.category', 'brand.category.parent']);

        if ($this->selectedCategory != null) {
            $query->whereRelation('brand.category.parent', 'id', '=', $this->selectedCategory);
        }

        return view('livewire.products', ['products' => $query->paginate(8)]);
    }
}
