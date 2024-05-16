@extends('dashboard')

@section('content')
    <head>
        <title>Product</title>
    </head>

    <section>
        <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
            <div class="grid grid-cols-2 gap-5">
                <div class="text-lg text-start">
                    <div>
                        <h4><strong>Name: </strong> {{ $products->name }}</h4>
                    </div>
                    <div>
                        <h4><strong>Size: </strong> {{ $products->size }}</h4>
                    </div>
                    <div>
                        <h4><strong>Price: </strong> {{ $products->price }}</h4>
                    </div>
                    <div>
                        <h4><strong>Weight: </strong> {{ $products->weight }}</h4>
                    </div>
                    <div>
                        <h4><strong>Category: </strong> {{ $categories->firstWhere('id', $products->category_id)->name }}</h4>
                    </div>
                    <div>
                        <h4><strong>Detail: </strong> {{ $products->detail }}</h4>
                    </div>
                </div>
                <div>
                    <div>
                        <img src="{{ asset('/images/' . $products->images) }}" alt="Product Image" class="object-cover rounded-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
