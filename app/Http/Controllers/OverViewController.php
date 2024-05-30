<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Coupon;

class OverViewController extends Controller
{
    public function index()
    {
        $productCount = Product::count();
        $categoryCount = Category::count();
        $coupons = Coupon::count();
        $product_discount = Product::count();
        return view('/dashboard/overView/index', compact('productCount', 'categoryCount'));
    }
}