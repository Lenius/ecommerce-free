<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use Rennokki\QueryCache\Traits\QueryCacheable;
use function smart_image;


class Brand extends Model
{
    protected $attributes = [
        'description' => '',
    ];

    protected $guarded = [];

    protected $casts = [
        'images'     => 'array',
    ];

    public function scopeOnline($query)
    {
        return $query->where('online', '=', true);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
