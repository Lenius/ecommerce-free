<?php

namespace App\Http\Livewire;

use App\Facades\MyCart;
use Lenius\Basket\ItemInterface;
use Lenius\LaravelEcommerce\Facades\Cart;
use Livewire\Component;

class Basket extends Component
{
    public function render()
    {
        return view('livewire.basket');
    }

    public function remove($itemIdentifier)
    {
        if ($item = Cart::item($itemIdentifier)) {
            Cart::remove($itemIdentifier);

            $this->emit('updateCart', ['product_id' => null, 'quantity' => 0]);
        }
    }

    public function inc($itemIdentifier)
    {
        if ($item = Cart::item($itemIdentifier)) {
            /** @var ItemInterface $item */
            Cart::inc($itemIdentifier);
            $this->emit('updateCart', ['product_id' => $item->id, 'quantity' => $item->quantity]);
        }
    }

    public function dec($itemIdentifier)
    {
        if ($item = Cart::dec($itemIdentifier)) {
            /** @var ItemInterface $item */
            $this->emit('updateCart', ['product_id' => $item->id, 'quantity' => $item->quantity]);
        } else {
            $this->emit('updateCart', ['product_id' => $item->id, 'quantity' => 0]);
        }

    }
}
