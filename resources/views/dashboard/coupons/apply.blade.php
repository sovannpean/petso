<!-- resources/views/dashboard/coupons/apply.blade.php -->
@extends('dashboard')

@section('content')
    <section class="max-w-screen-2xl mx-auto">
        <div class="flex justify-between items-center px-10">
            <a href="{{ route('dashboard') }}">
                <i class="fa-solid fa-arrow-left text-2xl bg-blue-300 px-4 py-2.5 text-gray-700 hover:bg-blue-400 rounded-full"></i>
            </a>
            <div class="flex items-center gap-2 font-semibold">
                <i class="fa-solid fa-tags"></i>
                <h1>Apply Coupon</h1>
            </div>
        </div>

        <div class="mt-10 px-10">
            <form action="{{ route('coupons.apply') }}" method="post">
                @csrf

                <div class="flex flex-col">
                    <label for="product_id">Product</label>
                    <select name="product_id" id="product_id" class="bg-gray-100 px-4 py-2 mt-2 rounded-md w-[450px]" required>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }} - ${{ $product->price }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex flex-col mt-4">
                    <label for="coupon_code">Coupon Code</label>
                    <select name="coupon_code" id="coupon_code" class="bg-gray-100 px-4 py-2 mt-2 rounded-md w-[450px]" required>
                        @foreach ($coupons as $coupon)
                            <option value="{{ $coupon->code }}">{{ $coupon->code }} - ${{ $coupon->discount_amount }} off</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-6">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Apply
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
