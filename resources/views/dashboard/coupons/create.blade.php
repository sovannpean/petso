@extends('dashboard')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Coupon</title>
</head>
<body>
    <section class="max-w-screen-2xl mx-auto">
        <div class="flex justify-between items-center">
            <a href="javascript:void(0);" onclick="history.back()">
                <i class="fa-solid fa-arrow-left text-2xl bg-blue-300 px-4 py-2.5 text-gray-700 hover:bg-blue-400 rounded-full"></i>
            </a>
            <div class="flex items-center gap-2 font-semibold">
                <i class="fa-solid fa-plus"></i>
                <h1>Add A New Coupong</h1>
            </div>
        </div>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    {{-- form --}}
    <div class="mt-10 px-10">
        <form action="{{ route('coupons.store') }}" method="POST"  id="discountForm" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-2 gap-5">
        {{-- For code --}}
        <div>
            <label for="code">Code:</label>
            <input type="text" id="code" name="code" required class="bg-gray-100 px-4 py-2 mt-2 rounded-md w-full">
        </div>
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required class="bg-gray-100 px-4 py-2 mt-2 rounded-md w-full">
        </div>
        <div>
            <label for="discount_amount">Discount Amount:</label>
            <input type="number" id="discount_amount" name="discount_amount" min="0" step="0.01" required class="bg-gray-100 px-4 py-2 mt-2 rounded-md w-full">
        </div>
        <div>
            <label for="status">Status:</label>
            <input type="checkbox" id="status" name="status" value="1" checked class="form-control px-4 py-2 mt-2 bg-gray-100 rounded-md"> Active
        </div>
        <div>
            <label for="starts_at">Starts At:</label>
            <input type="datetime-local" id="starts_at" name="starts_at" required>
        </div>
        <div>
            <label for="expires_at">Expires At:</label>
            <input type="datetime-local" id="expires_at" name="expires_at" required>
        </div>
        <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg px-5 py-2.5 text-center">Create Coupon</button>
    </form>
</body>
@endsection