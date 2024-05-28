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

    public function indexOrder(Request $request)
    {
        $selectedProducts = [];
        if ($request->has('selected_products')) {
            $selectedProducts = Product::whereIn('id', $request->input('selected_products'))->get();
        }

        return view('pages.orderPage', compact('selectedProducts'));
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'province' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'commune' => 'required|string|max:255',
            'house' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'order_notes' => 'nullable|string',
            'selected_products' => 'required|array',
            'selected_products.*' => 'exists:products,id',
        ]);

        $order = Order::create([
            'user_id' => Auth::id(),
            'status' => 'pending',
            'receiver_name' => $validatedData['name'],
            'receiver_phone' => $validatedData['phone'],
            'province' => $validatedData['province'],
            'district' => $validatedData['district'],
            'commune' => $validatedData['commune'],
            'house_address' => $validatedData['house'],
            'email' => $validatedData['email'],
            'order_notes' => $validatedData['order_notes'],
        ]);

        $order->products()->attach($validatedData['selected_products'], ['quantity' => 1]);

        $selectedProducts = Product::whereIn('id', $validatedData['selected_products'])->get();
        $totalPrice = $selectedProducts->sum('price');

        return redirect()->route('orders.index')->with(['success' => 'Order created successfully!', 'selectedProducts' => $selectedProducts, 'totalPrice' => $totalPrice]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'products' => 'required|array',
            'products.*' => 'exists:products,id',
        ]);

        $order = Order::create([
            'user_id' => Auth::id(),
            'status' => 'pending',
        ]);

        $order->products()->attach($request->products, ['quantity' => 1]);

        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    public function updateStatus(Order $order, Request $request)
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        $order->update(['status' => $request->status]);

        return redirect()->route('orders.index')->with('success', 'Order status updated successfully.');
    }
}