<!-- resources/views/dashboard/coupons/create.blade.php -->
@extends('dashboard')

@section('content')
    <section class="max-w-screen-2xl mx-auto">
        <div class="flex justify-between items-center px-10">
            <a href="{{ route('coupons.index') }}">
                <i class="fa-solid fa-arrow-left text-2xl bg-blue-300 px-4 py-2.5 text-gray-700 hover:bg-blue-400 rounded-full"></i>
            </a>
            <div class="flex items-center gap-2 font-semibold">
                <i class="fa-solid fa-tags"></i>
                <h1>Create Coupon</h1>
            </div>
        </div>

        <div class="mt-10 px-10">
            <form action="{{ route('coupons.store') }}" method="post">
                @csrf

                <div class="flex flex-col">
                    <label for="code">Code</label>
                    <input type="text" name="code" id="code" value="{{ old('code') }}" placeholder="Coupon Code" required class="bg-gray-100 px-4 py-2 mt-2 rounded-md w-[450px]">
                </div>

                <div class="flex flex-col mt-4">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Coupon Name" required class="bg-gray-100 px-4 py-2 mt-2 rounded-md w-[450px]">
                </div>

                <div class="flex flex-col mt-4">
                    <label for="discount_amount">Discount Amount ($)</label>
                    <input type="number" name="discount_amount" id="discount_amount" value="{{ old('discount_amount') }}" placeholder="Discount Amount" required class="bg-gray-100 px-4 py-2 mt-2 rounded-md w-[450px]">
                </div>

                <div class="flex flex-col mt-4">
                    <label for="starts_at">Starts At</label>
                    <input type="datetime-local" name="starts_at" id="starts_at" value="{{ old('starts_at') }}" class="bg-gray-100 px-4 py-2 mt-2 rounded-md w-[450px]" required>
                </div>

                <div class="flex flex-col mt-4">
                    <label for="expires_at">Expires At</label>
                    <input type="datetime-local" name="expires_at" id="expires_at" value="{{ old('expires_at') }}" class="bg-gray-100 px-4 py-2 mt-2 rounded-md w-[450px]" required>
                </div>

                <div class="flex flex-col mt-4">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="bg-gray-100 px-4 py-2 mt-2 rounded-md w-[450px]">
                        <option value="1" selected>Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                <div class="mt-6">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
