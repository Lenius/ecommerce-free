<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;

    public $perPage = 12;
    public $category;
    public $filterBrands = [];
    public $search;
    public $sort;

    protected $queryString = ['perPage', 'category', 'search', 'filterBrands'];

    public function render()
    {
        $data = [
            'categories'  => Category::all(),
            'brands'  => Brand::all(),
            'products' => Product::where('online', true)
                ->when($this->search, function ($query) {
                    $query->where('name', 'ilike', '%' . $this->search . '%');
                })->when($this->category, function ($query) {
                    $query->where('category_id', $this->category);
                })
                ->when($this->filterBrands, function ($query) {
                    $query->whereIn('brand_id', $this->filterBrands);
                })
                ->paginate($this->perPage)
        ];

        return view('livewire.home', $data);
    }
}
