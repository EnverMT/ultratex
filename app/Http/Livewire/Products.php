<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\PaymentType;
use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public ?Category $selectedCategory = null;
    public ?Category $selectedSubCategory = null;
    public $paymentTypes = null;

    public $categories;
    public $subcategories;

    public function mount()
    {
        $this->categories = Category::where('isMain', true)->get();
        $this->subcategories = Category::where('isMain', false)->get();
        $this->paymentTypes = PaymentType::get();
    }

    public function selectCategory(int $selectedCategory = null)
    {
        $this->selectedCategory = Category::find($selectedCategory);
        $this->selectedSubCategory = null; // TO DO improve filter ability
    }

    public function selectSubCategory(int $selectedSubCategory = null)
    {
        $this->selectedSubCategory = Category::find($selectedSubCategory);
        $this->selectedCategory = null;
    }

    public function render()
    {
        $query = Product::with(['pictures', 'brand', 'brand.category', 'brand.category.parent']);

        if ($this->selectedCategory != null && $this->selectedSubCategory == null) {
            $query->whereRelation('brand.category.parent', 'id', '=', $this->selectedCategory->id);
        }

        if ($this->selectedSubCategory != null) {
            $query->whereRelation('brand.category', 'id', '=', $this->selectedSubCategory->id);
        }

        return view('livewire.products', ['products' => $query->paginate(8)]);
    }
}
