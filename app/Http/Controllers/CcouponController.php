<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ccoupon;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return view('/dashboard/coupong/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('/dashboard/coupong/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'code' => 'required',
            'discount_amount' => 'required|numeric',
            'status' => 'required',
        ]);

        if(!empty($request->starts_at)){
            $now = Carbon:: now();
        }

        $coupong = new Ccoupon([
            'code' => $request->input('code'),
            'name' => $request->input('name'),
            'discount_amount' => $request->input('discount_amount'),
            'status' => $request->input('status'),
            'starts_at' => $request->input('starts_at'),
            'expires_at' => $request->input('expires_at'),
        ]);
        $coupong->save();
        return redirect()->route('/dashboard/coupong/index')->with('success', 'Coupon created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
