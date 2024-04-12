<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function create()
    {
        return view('coupons.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:coupons',
            'name' => 'required',
            'discount_amount' => 'required|numeric|min:0',
            'status' => 'nullable|boolean',
            'starts_at' => 'required|date',
            'expires_at' => 'required|date|after:starts_at',
        ]);

        Coupon::create($request->all());

        return redirect()->route('coupons.create')->with('success', 'Coupon created successfully.');
    }
}