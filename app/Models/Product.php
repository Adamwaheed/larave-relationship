<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = [
        'category_id',
        'brand_id',
        'vendor_id',
    ];

    public $appends = ['gst', 'total'];

    public function getGstAttribute(): float
    {
        return round($this->price * 0.06, 4);
    }

    public function getTotalAttribute(): float
    {
        return $this->getGstAttribute() + $this->price;
    }

    public function brand(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function vendor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Manufacture::class, 'vendor_id', 'id');
    }
}
