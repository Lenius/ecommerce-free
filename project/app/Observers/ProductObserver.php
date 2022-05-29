<?php

namespace App\Observers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ProductObserver
{
    /**
     * Handle the "saved" event.
     *
     * @param Product $product
     *
     * @throws \Exception
     */
    public function saved(Product $product)
    {

    }

    /**
     * Handle the "deleted" event.
     *
     * @param Product $product
     *
     * @throws \Exception
     */
    public function deleted(Product $product)
    {

    }

    /**
     * Handle the "saving" event.
     *
     * @param Product $product
     */
    public function saving(Product $product)
    {
        if (empty($product->slug)) {
            $product->slug = Str::slug($product->number);
        }
    }
}
