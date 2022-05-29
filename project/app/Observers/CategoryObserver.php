<?php

namespace App\Observers;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryObserver
{
    /**
     * Handle the "saved" event.
     *
     * @param Category $category
     *
     * @throws \Exception
     */
    public function saved(Category $category)
    {

    }

    /**
     * Handle the "deleted" event.
     *
     * @param Category $category
     *
     * @throws \Exception
     */
    public function deleted(Category $category)
    {

    }

    /**
     * Handle the "saving" event.
     *
     * @param Category $category
     */
    public function saving(Category $category)
    {
        if (empty($category->slug)) {
            $category->slug = Str::slug($category->name);
        }
    }
}
