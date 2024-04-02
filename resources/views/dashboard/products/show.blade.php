@extends('dashboard')

@section('content')
    <section class="max-w-screen-2xl mx-auto px-10">
        <div class="flex justify-between items-center">
            <a href="javascript:void(0);" onclick="history.back()">
                <i class="fa-solid fa-arrow-left text-2xl bg-blue-300 px-4 py-2.5 text-gray-700 hover:bg-blue-400 rounded-full"></i>
            </a>
            <div class="flex items-center gap-2 font-semibold">
                <i class="fa-solid fa-pen-to-square"></i>
                <h1>Please update the Pets information</h1>
            </div>
        </div>

        {{-- Show Products --}}
        <div class="mt-20 grid grid-cols-2">
            {{-- For image --}}
            <div class="w-[600px] h-[450px] border-2 border-dashed border-rose-200">
                <img src="/images/{{ $products->images }}" alt="Product" class="w-full h-full">
            </div>

            {{-- About product --}}
            <div class="text-lg font-medium">
                <h1 class="text-2xl mb-5 font-semibold">For   : 
                    <label for="category" class="text-blue-700">
                        {{ $products->category }}
                    </label>
                </h1>
                <h1>Name  : {{ $products->name }}</h1>
                <h1 class="text-rose-500">Price : {{ $products->price }}</h1>
                <h1>Size  : {{ $products->size}}</h1>
                <h1>Detail: {{ $products->detail}}</h1>
            </div>
        </div>
        
    </section>

@endsection  
