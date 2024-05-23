<x-app-layout>
    <div class="container">
        <h1>My Favorites</h1>

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

        {{-- Select All Checkbox --}}
        <div class="flex justify-between items-center mb-4">
            <label class="inline-flex items-center">
                <input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600">
                <span class="ml-2">Select All</span>
            </label>
            <button id="order-selected" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Order Selected
            </button>
        </div>
<form id="order-form" action="{{ route('order.create') }}" method="POST">
    @csrf
    <div class="grid grid-cols-4 gap-4">
        @forelse($wishlists as $wishlist)
            <div class="border border-gray-200 bg-[#48b194]">
                <div class="bg-gray-100">
                    <a href="/detail-product/{{ $wishlist->product->id }}">
                        <img src="{{ asset('/images/' . $wishlist->product->images) }}" alt="" class="w-full h-[350px] object-cover">
                    </a>
                </div>
                <div class="p-4">
                    <h1 class="font-bold text-[#602b05]">{{ $wishlist->product->name }}</h1>
                    <div class="flex justify-between items-center mt-2">
                        <div>
                            <a href="/detail-product/{{ $wishlist->product->id }}">
                                <h1 class="font-semibold text-gray-100">{{ $wishlist->product->price }}$</h1>
                                <h1 class="text-sm"><span class="font-semibold">SIZE:</span> {{ $wishlist->product->size }}</h1>
                            </a>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="flex gap-2">
                                {{-- Remove from Wishlist Form (DELETE) --}}
                                <form action="{{ route('wishlist.remove') }}" >
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $wishlist->product->id }}">
                                    <button type="submit" class="bg-white hover:border-[#115542] hover:border rounded-md p-2">
                                        <i class="fa-solid fa-heart text-red-900 hover:text-red-500"></i>
                                    </button>
                                </form>
                                {{-- Add to Cart Button --}}
                                <a href="#" class="bg-white hover:border-[#115542] hover:border rounded-md p-2">
                                    <i class="fa-solid fa-cart-plus text-gray-900 hover:text-gray-500"></i>
                                </a>
                            </div>
                            <div>
                                <i class="fa-solid fa-star text-sm text-yellow-700"></i>
                                <i class="fa-solid fa-star text-sm text-yellow-700"></i>
                                <i class="fa-solid fa-star text-sm text-yellow-700"></i>
                                <i class="fa-solid fa-star text-sm text-yellow-700"></i>
                                <i class="fa-solid fa-star text-sm text-yellow-700"></i>
                            </div>
                        </div>
                        {{-- Checkbox for Selecting Product --}}
                        <div>
                            <label class="inline-flex items-center mt-2">
                                <input type="checkbox" name="selected_products[]" value="{{ $wishlist->product->id }}" class="form-checkbox h-5 w-5 text-blue-600 select-item">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p>No favorite items added yet.</p>
        @endforelse
    </div>
</form>


    </div>

    <script>
        document.getElementById('select-all').addEventListener('change', function(e) {
            let checkboxes = document.querySelectorAll('.select-item');
            checkboxes.forEach(checkbox => {
                checkbox.checked = e.target.checked;
            });
        });

        document.getElementById('order-selected').addEventListener('click', function() {
            document.getElementById('order-form').submit();
        });
    </script>
</x-app-layout>
