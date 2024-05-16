<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CouponController extends Controller
{
    public function index(): View
    {
        $coupons = Coupon::all();
        $products = Product::all(); // Fetch all products for the dropdown
        return view('dashboard.coupons.index', compact('coupons', 'products'));
    }

    public function create(): View
    {
        $products = Product::all();
        return view('dashboard.coupons.create', compact('products'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'code' => 'required|string|unique:coupons,code|max:255',
            'name' => 'required|string|max:255',
            'discount_amount' => 'required|numeric|min:0|max:100', // Ensure it's a percentage
            'starts_at' => 'required|date',
            'expires_at' => 'required|date|after:starts_at',
            'product_ids' => 'required|array',
            'product_ids.*' => 'exists:products,id',
        ]);

        $coupon = Coupon::create([
            'code' => $request->input('code'),
            'name' => $request->input('name'),
            'discount_amount' => $request->input('discount_amount'),
            'status' => $request->input('status', true),
            'starts_at' => $request->input('starts_at'),
            'expires_at' => $request->input('expires_at'),
        ]);

        $coupon->products()->sync($request->input('product_ids'));

        return redirect()->route('coupons.index')->with('success', 'Coupon created successfully.');
    }

    public function apply(Request $request): RedirectResponse
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'coupon_code' => 'required|exists:coupons,code',
        ]);

        $product = Product::find($request->input('product_id'));
        $coupon = Coupon::where('code', $request->input('coupon_code'))->first();

        if ($coupon && $coupon->status && now()->between($coupon->starts_at, $coupon->expires_at)) {
            // Apply percentage discount
            $discountAmount = $product->price * ($coupon->discount_amount / 100);
            $product->price = max(0, $product->price - $discountAmount);

            // Save the updated price
            $product->save();
        }

        return redirect()->route('dashboard.products.index')->with('success', 'Coupon applied successfully.');
    }

}