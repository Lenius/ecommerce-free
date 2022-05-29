<?php

namespace App\Http\Livewire;

use App\Facades\MyCart;
use Lenius\Basket\Item;
use Lenius\LaravelEcommerce\Facades\Cart;
use Livewire\Component;

class Product extends Component
{
    public \App\Models\Product $product;

    public $qty = 1;
    public $price = 1;

    protected $rules = [
        'qty'      => 'required|integer',
        'price'    => 'required',
//        'option.*' => 'required',
    ];

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

    private function calculate()
    {
        return $this->product->price;
    }

    public function submit()
    {
        $this->price = $this->calculate();

        $validatedData = $this->validate();

        $item = [
            'id'               => $this->product->id,
            'number'           => $this->product->number,
            'image'            => $this->product->image ?? '/images/items/10.jpg',
            'category'         => $this->product->category_id,
            'name'             => $this->product->name,
            'note'             => '',
            'stock'            => $this->product->StockStatus->name,
            'unit'             => $this->product->unit->name,
            'tax'              => $this->product->tax->value,
            'price'            => $validatedData['price'],
            'weight'           => $this->product->weight,
            'quantity'         => $validatedData['qty'],
//            'link'             => $this->product->link,
            'type'             => MyCart::PRODUCT_TYPE,
//            'delivery_type_id' => '',
//            'delivery_info'    => [],
//            'edit'             => true,
        ];

//        foreach ($this->selected_options as $option) {
//            if (! empty($option['selected'])) {
//                if (in_array($option['type'], ['select', 'dropdown', 'auto'])) {
//                    $item['options'][] = [
//                        'name'    => $option['selected']['name'],
//                        'label'   => $option['selected']['label'],
//                        'number'  => $option['selected']['number'],
//                        'value'   => $option['selected']['value'],
//                        'price'   => (float)$option['selected']['price'],
//                        'weight'  => (float)$option['selected']['weight'],
//                    ];
//                }
//
//                if (in_array($option['type'], ['input'])) {
//                    $item['options'][] = [
//                        'name'    => $option['selected']['name'],
//                        'label'   => $option['selected']['label'],
//                        'number'  => '',
//                        'value'   => $option['selected']['value'],
//                        'price'   => 0,
//                        'weight'  => 0,
//                    ];
//                }
//            }
//        }
//
//        MyCart::removeDelivery();

        Cart::insert(new Item($item));

        $this->emit('updateCart');

        //$this->resetForm();
        session()->flash('message', sprintf('Product added ! <a href="%s">Goto basket</a>', '/basket'));
    }
}
