<x-app-layout>
    <section class="max-w-screen-xl mx-auto my-10">
        <div>
            {{-- Alert Messages --}}
            @if(session('success'))
                <div class="alert alert-success bg-green-500 text-white p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-error bg-red-500 text-white p-4 rounded mb-4">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        <div>
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-semibold">Favorites</h1>
                {{-- Select All Checkbox --}}
                <div class="flex flex-row gap-4 items-center">
                    <label class="inline-flex items-center">
                        <input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600">
                        <span class="ml-2">Select All</span>
                    </label>
                    <button id="order-selected" class="bg-[#48b194] hover:bg-[#6ad1b4] font-bold py-1.5 px-5 rounded-lg">
                        Order
                    </button>
                </div>
            </div>
            {{-- product card --}}
            <div class="mt-5">
                <form id="order-form" action="{{ route('order.create') }}" method="POST">
                    @csrf
                    <div>
                        {{-- loop --}}
                        @forelse($wishlists as $wishlist)
                            <div class="flex justify-between items-center border-y border-gray-300 py-2">
                                <a href="/detail-product/{{ $wishlist->product->id }}">
                                    <div class="flex gap-2 items-center">
                                        <img src="{{ asset('/images/' . $wishlist->product->images) }}" alt="" class="h-20">
                                        <h1>{{ $wishlist->product->name }}</h1>
                                    </div>
                                </a>
                                <div class="flex gap-10 items-center">
                                    <h1>{{ $wishlist->product->price }}$</h1>
                                    <h1 class="text-[#48b194]">In Stock</h1>

                                    {{-- Remove from Wishlist Form (DELETE) --}}
                                    <form action="{{ route('wishlist.remove') }}" >
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $wishlist->product->id }}">
                                        <button type="submit">
                                            <i class="fa-solid fa-trash-can text-red-800"></i>
                                        </button>
                                    </form>

                                    <button id="order-selected" class="bg-[#48b194] hover:bg-[#6ad1b4] text-gray-800 font-medium py-1.5 px-5 rounded-lg">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                            @empty
                                <p>No favorite items added yet.</p>
                        @endforelse
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>
