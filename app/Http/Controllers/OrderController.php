<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('products')->where('user_id', Auth::id())->get();
        return view('dashboard.orders.index', compact('orders'));
    }

    public function create()
    {
        $products = Product::all();
        return view('dashboard.orders.create', compact('products'));
    }

    public function store(Request $request)
    {
        $order = Order::create([
            'user_id' => Auth::id(),
            'status' => 'pending',
        ]);

        $order->products()->attach($request->products, ['quantity' => 1]);

        return redirect()->route('dashboard.orders.index')->with('success', 'Order created successfully.');
    }

    public function updateStatus(Order $order, Request $request)
    {
        $order->update(['status' => $request->status]);

        return redirect()->route('dashboard.orders.index')->with('success', 'Order status updated successfully.');
    }
}