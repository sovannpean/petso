<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class AdminController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', 'pending')->with('products')->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function approve(Order $order)
    {
        $order->update(['status' => 'approved']);
        Log::info('Order approved: ' . $order->id);
        return redirect()->route('admin.orders.index')->with('success', 'Order approved successfully!');
    }

    public function reject(Order $order)
    {
        $order->update(['status' => 'rejected']);
        Log::info('Order rejected: ' . $order->id);
        return redirect()->route('admin.orders.index')->with('success', 'Order rejected successfully!');
    }
}