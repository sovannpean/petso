<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CouponController extends Controller
{
    public function index():View
    {
        $coupons = Coupon::all();
        return view('dashboard.coupons.index', compact('coupons') );
    } 
    
    public function create()
    {
        return view('dashboard.coupons.create');
    }

    public function store(Request $request):RedirectResponse
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
        return redirect('/dashboard/coupons/index')->with('success', 'Product created successfully.');
    }

    public function show(string $id): View
    {
        $coupons = Coupon::findOrFail($id);
        return view('dashboard.coupons.show', compact('coupons',) );
    }

    public function destroy(string $id): RedirectResponse
    {
        Coupon::destroy($id);
        return redirect('/dashboard/coupons/index')->with('success', 'Product deleted successfully.');
    }

}