<!-- resources/views/admin/orders/index.blade.php -->

@extends('dashboard')

@section('content')
<div class="container">
    <h1>Pending Orders</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if($orders->isEmpty())
        <p>No pending orders.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Receiver Name</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->receiver_name }}</td>
                        <td>{{ $order->receiver_phone }}</td>
                        <td><span class="badge badge-info">{{ $order->status }}</span></td>
                        <td>
                            <form action="{{ route('admin.orders.approve', $order->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-success">Approve</button>
                            </form>
                            <form action="{{ route('admin.orders.reject', $order->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-danger">Reject</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <h5>Products</h5>
                            <ul>
                                @foreach ($order->products as $product)
                                    <li>{{ $product->name }} (Quantity: {{ $product->pivot->quantity }})</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
