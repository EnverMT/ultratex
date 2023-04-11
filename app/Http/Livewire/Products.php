<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\PaymentType;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public ?int $selectedCategoryId = null;
    public ?int $selectedSubCategoryId = null;

    public $paymentTypes = null;
    public $search = '';
    protected $queryString = [
        'search' => ['except' => ''],
        'selectedCategoryId' => ['except' => null],
        'selectedSubCategoryId' => ['except' => null],
    ];

    public $categories;
    public $subcategories;

    public function mount()
    {
        $this->categories = Category::where('isMain', true)->get();
        $this->subcategories = Category::where('isMain', false)->get();
        $this->paymentTypes = PaymentType::get();
        // $this->selectedCategoryId = $this->queryString['selectedCategoryId'];
        // $this->selectedSubCategoryId = $this->queryString['selectedSubCategoryId'];
    }

    public function selectCategory(int $selectedCategoryId = null)
    {
        $this->resetPage();
        $this->selectedCategoryId = $selectedCategoryId;
        $this->selectedSubCategoryId = null; // TO DO improve filter ability
    }

    public function selectSubCategory(int $selectedSubCategoryId = null)
    {
        $this->resetPage();
        $this->selectedSubCategoryId = $selectedSubCategoryId;
        $this->selectedCategoryId = null;
    }

    public function render()
    {
        $query = Product::with(['pictures', 'brand', 'brand.category', 'brand.category.parent']);

        if ($this->selectedCategoryId != null && $this->selectedSubCategoryId == null) {
            $query->whereRelation('brand.category.parent', 'id', '=', $this->selectedCategoryId);
        }

        if ($this->selectedSubCategoryId != null) {
            $query->whereRelation('brand.category', 'id', '=', $this->selectedSubCategoryId);
        }

        if ($this->search != '') {
            $query->where('title', 'ilike', '%'.$this->search.'%')
                    ->orWhere('model', 'ilike', '%'.$this->search.'%');
            // ILIKE works only on PostgreSQL
        }

        return view('livewire.products', ['products' => $query->paginate(8)]);
    }
}
