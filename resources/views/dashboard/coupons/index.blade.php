<!-- resources/views/dashboard/coupons/index.blade.php -->
@extends('dashboard')

@section('content')
    <section class="max-w-screen-2xl mx-auto">
        <div class="flex justify-between items-center px-10">
            <a href="{{ route('dashboard') }}">
                <i class="fa-solid fa-arrow-left text-2xl bg-blue-300 px-4 py-2.5 text-gray-700 hover:bg-blue-400 rounded-full"></i>
            </a>
            <div class="flex items-center gap-2 font-semibold">
                <i class="fa-solid fa-tags"></i>
                <h1>Coupons</h1>
            </div>
        </div>

        <div class="mt-10 px-10">
            <a href="{{ route('coupons.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create New Coupon
            </a>
            <table class="mt-4 w-full">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Discount Amount (%)</th>
                        <th>Status</th>
                        <th>Starts At</th>
                        <th>Expires At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($coupons as $coupon)
                        <tr>
                            <td>{{ $coupon->code }}</td>
                            <td>{{ $coupon->name }}</td>
                            <td>{{ $coupon->discount_amount }}%</td>
                            <td>{{ $coupon->status ? 'Active' : 'Inactive' }}</td>
                            <td>{{ $coupon->starts_at->format('Y-m-d H:i') }}</td>
                            <td>{{ $coupon->expires_at->format('Y-m-d H:i') }}</td>
                            <td>
                                <form action="{{ route('coupons.apply') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="coupon_code" value="{{ $coupon->code }}">
                                    <select name="product_id" required>
                                        <option value="" disabled selected>Select a product</option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->name }} - ${{ $product->price }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                        Apply
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection