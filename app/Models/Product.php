<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'detail', 'size', 'weight', 'images', 'category_id'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }
    public function getDiscountedPrice($discountPercentage)
    {
        return $this->price * ((100 - $discountPercentage) / 100);
    }
}