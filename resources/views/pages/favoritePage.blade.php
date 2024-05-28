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
                   <a href="{{ url ('orders.index') }}">
                        <button id="order-selected" class="bg-[#48b194] hover:bg-[#6ad1b4] font-bold py-1.5 px-5 rounded-lg">
                            Order
                        </button>
                    </a>
                </div>
            </div>

            {{-- Product Card --}}
            <div class="mt-5">
                @forelse($wishlists as $wishlist)
                    <div class="flex justify-between items-center border-y border-gray-300 py-2 wishlist-item">
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
                            <form action="{{ route('wishlist.remove') }}" method="POST" class="remove-from-wishlist-form">
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
                    <section>
                        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                            <div class="mx-auto max-w-screen-sm text-center">
                                <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-primary-600 dark:text-primary-500">No favorite items added yet.</h1>
                                <a href="/" class="inline-flex text-white bg-[#48b194] hover:bg-[#6ad1b4] focus:ring-4 focus:outline-none focus:ring-bg-[#6ad1b4] font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900 my-4">Back to Shopping</a>
                            </div>   
                        </div>
                    </section>
                @endforelse
            </div>
        </div>
    </section>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Handle remove from wishlist
            const removeForms = document.querySelectorAll('.remove-from-wishlist-form');
            
            removeForms.forEach(form => {
                form.addEventListener('submit', function (e) {
                    e.preventDefault();
                    
                    const formData = new FormData(form);
                    
                    fetch(form.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert(data.message);
                            form.closest('.wishlist-item').remove(); // Remove item from DOM
                        } else {
                            alert(data.message);
                        }
                    })
                    .catch(error => console.error('Error:', error));
                });
            });
        });
    </script>
</x-app-layout>
