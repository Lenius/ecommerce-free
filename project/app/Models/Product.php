<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'images'                   => 'array',
        'online'                   => 'boolean',
        'price'                    => 'float',
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function tax(): BelongsTo
    {
        return $this->belongsTo(Tax::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function stockStatus(): BelongsTo
    {
        return $this->belongsTo(StockStatus::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function scopeOnline($query)
    {
        return $query->where('products.online', '=', true);
    }
}
