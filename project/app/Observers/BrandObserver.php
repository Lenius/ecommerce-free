<?php

namespace App\Observers;

use App\Models\Brand;
use Illuminate\Support\Str;

class BrandObserver
{
    /**
     * Handle the "saving" event.
     *
     * @param Brand $brand
     */
    public function saving(Brand $brand) : void
    {
        if (empty($brand->slug)) {
            $brand->slug = Str::slug($brand->name);
        }
    }
}
