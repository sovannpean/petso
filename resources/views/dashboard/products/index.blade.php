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
                <a href="{{ url('/dashboard/products/create') }}">
                    <button type="button" class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-gray-900 bg-blue-200 border border-blue-300 rounded-lg focus:outline-none hover:bg-blue-400 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Add new product
                    </button>
                </a>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3 text-center">Id</th>
                        <th scope="col" class="px-4 py-3 text-center">Name</th>
                        <th scope="col" class="px-4 py-3 text-center">Image</th>
                        <th scope="col" class="px-4 py-3 text-center">Original Price</th>
                        <th scope="col" class="px-4 py-3 text-center">Discounted Price</th>
                        <th scope="col" class="px-4 py-3 text-center">Size</th>
                        <th scope="col" class="px-4 py-3 text-center">Weight</th>
                        <th scope="col" class="px-4 py-3 text-center">Detail</th>
                        <th scope="col" class="px-4 py-3 text-center">Rating</th>
                        <th scope="col" class="px-4 py-3 text-center">Stock</th>
                        <th scope="col" class="px-4 py-3 text-center">Category</th>
                        <th scope="col" class="px-4 py-3 text-center">Actions</th>
                        <th scope="col" class="px-4 py-3 text-center">Delete/Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $item)
                        <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                            {{-- Id --}}
                            <td scope="row" class="w-4 px-4 py-3 text-center font-medium text-gray-900 whitespace-nowrap">
                                {{ $loop->iteration }}
                            </td>

                            {{-- Name --}}
                            <td class="px-4 py-2 text-center font-medium text-gray-900 whitespace-nowrap">
                                {{ $item->name }}
                            </td>

                            {{-- Image --}}
                            <td class="flex items-center justify-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <img src="{{ asset('/images/' . $item->images) }}" height="50" width="50" onchange="showFile(event)" required>
                            </td>

                            {{-- Original Price --}}
                            <td class="px-4 py-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                ${{ number_format($item->price, 2) }}
                            </td>

                            {{-- Discounted Price --}}
                            <td class="px-4 py-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                @if($item->coupons->isNotEmpty())
                                    ${{ number_format($item->discounted_price, 2) }}
                                @else
                                    N/A
                                @endif
                            </td>

                            {{-- Size --}}
                            <td class="px-4 py-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->size }}
                            </td>

                            {{-- Weight --}}
                            <td class="px-4 py-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->weight }}
                            </td>

                            {{-- Detail --}}
                            <td class="px-4 py-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->detail }}
                            </td>

                            {{-- Rating --}}
                            <td class="px-4 py-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="flex items-center justify-center">
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </td>
                            <p>Stock: {{ $product->stock }}</p>


                            {{-- Category --}}
                            <td class="px-4 py-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->category->name }}
                            </td>

                            {{-- Actions --}}
                            <td class="px-4 py-2 text-center">
                                <a href="{{ url('/dashboard/products/show', $item->id) }}" class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-white bg-green-500 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">
                                    Show
                                </a>
                            </td>

                            {{-- Delete/Edit --}}
                            <td class="px-4 py-2 text-center">
                                <a href="{{ url('/dashboard/products/update', $item->id) }}" class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">
                                    Edit
                                </a>
                                <form action="{{ url('/dashboard/products/index', $item->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-opacity-50">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Navbar above --}}
        <nav class="flex flex-col items-start justify-between p-4 space-y-3 md:flex-row md:items-center md:space-y-0 md:space-x-3" aria-label="Table navigation">
            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                Showing
                <span class="font-semibold text-gray-900 dark:text-white">{{ $products->count() }}</span>
                of
                <span class="font-semibold text-gray-900 dark:text-white">{{ $products->count() }}</span>
                entries
            </span>
        </nav>
    </div>
</section>
@endsection

<script>
    function showFile(event) {
        var input = event.target;
        var reader = new FileReader();
        reader.onload = function () {
            var dataURL = reader.result;
            var output = document.getElementById('image-preview');
            output.src = dataURL;
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>
