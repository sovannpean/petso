<!-- resources/views/dashboard/orders/index.blade.php -->

@extends('dashboard')

@section('content')
<div class="container">
    <h1>Manage Orders</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>User</th>
                <th>Products</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>
                        @foreach($order->products as $product)
                            {{ $product->name }} ({{ $product->pivot->quantity }}),
                        @endforeach
                    </td>
                    <td>{{ ucfirst($order->status) }}</td>
                    <td>
                        <form action="{{ route('dashboard.orders.approve', $order) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-success">Approve</button>
                        </form>
                        <form action="{{ route('dashboard.orders.reject', $order) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger">Reject</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection