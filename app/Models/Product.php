<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'detail', 'size', 'weight', 'images', 'category_id', 'stock'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function coupons()
    {
        return $this->belongsToMany(Coupon::class);
    }

    public function getDiscountedPriceAttribute()
    {
        $discountedPrice = $this->price;

        foreach ($this->coupons as $coupon) {
            if ($coupon->status && now()->between($coupon->starts_at, $coupon->expires_at)) {
                $discountedPrice *= ((100 - $coupon->discount_amount) / 100);
            }
        }

        return $discountedPrice;
    }
    public function isNearlyOutOfStock()
    {
        return $this->stock <= 10; // or any threshold you prefer
    }

}