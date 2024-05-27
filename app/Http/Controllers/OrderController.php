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
        $orders = Order::with('product')->where('user_id', Auth::id())->get();
        return view('dashboard.orders.index', compact('orders'));
    }

    public function indexOrder()
    {
        return view('pages.orderPage');
    }

    public function create(Request $request)
    {
        // Validate the request data
        $request->validate([
            'selected_products' => 'required|array',
            'selected_products.*' => 'exists:products,id',
        ]);

        // Process the order
        $selectedProducts = $request->input('selected_products');


        // Return a response or redirect
        return redirect()->back()->with('success', 'Order created successfully!');
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