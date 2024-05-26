<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','detail', 'price', 'stock', 'weight', 'images', 'category_id', 'sub_category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
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
        return $this->stock <= 3;
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }
    
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function averageRating()
    {
        return $this->ratings()->avg('rating');
    }

}