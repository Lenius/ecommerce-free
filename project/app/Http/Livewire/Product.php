<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    public \App\Models\Product $product;

    public function mount($slug)
    {
        $this->product = \App\Models\Product::online()
            ->with(['tax:id,name,value', 'StockStatus:id,name,description', 'brand:id,name,slug,description', 'unit:id,name'])
            ->where('slug', $slug)->firstOrFail();

        $this->updated('', '');
    }

    public function render()
    {
        return view('livewire.product');
    }
}
