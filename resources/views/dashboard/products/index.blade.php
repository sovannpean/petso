@extends('dashboard')

@section('content')
<head>
    <title>Product</title>
</head>

<section>
    @foreach ($products as $product)
        @if ($product->lowStock)
            <div class="alert alert-warning">
                The product {{ $product->name }} is nearly out of stock!
            </div>
        @endif
    @endforeach


    <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
        <div class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
            <div class="flex items-center flex-1 space-x-4">
                <h5>
                    <span class="text-gray-500">All Products:</span>
                    <span class="dark:text-white">{{ $products->count() }}</span>
                </h5>
                <h5>
                    <span class="text-gray-500">Total sales:</span>
                    <span class="dark:text-white">$88.4k</span>
                </h5>
            </div>
            <div class="flex flex-col flex-shrink-0 space-y-3 md:flex-row md:items-center lg:justify-end md:space-y-0 md:space-x-3">
                <!-- Modal toggle -->
                <div class="flex justify-center m-5">
                    <button id="addPetsButton" data-modal-target="addPetsModal" data-modal-toggle="addPetsModal" class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-gray-900 bg-blue-200 border border-blue-300 rounded-lg focus:outline-none hover:bg-blue-400 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Add new products
                    </button>
                </div>