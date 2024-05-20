@extends('dashboard')

@section('content')
<div class="container">
    <h1>Orders</h1>
    @foreach ($orders as $order)
        <div class="card mb-3">
            <div class="card-header">
                Order #{{ $order->id }}
                <span class="badge badge-info">{{ $order->status }}</span>
            </div>
            <div class="card-body">
                <h5 class="card-title">Products</h5>
                <ul>
                    @foreach ($order->products as $product)
                        <li>{{ $product->name }} (Quantity: {{ $product->pivot->quantity }})</li>
                    @endforeach
                </ul>
                <form action="{{ route('orders.updateStatus', $order->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <select name="status" class="form-control mb-2">
                        <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="shipped" {{ $order->status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                        <option value="delivered" {{ $order->status == 'delivered' ? 'selected' : '' }}>Delivered</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Update Status</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
