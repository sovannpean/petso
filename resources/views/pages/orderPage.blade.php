<x-app-layout>
    <section class="max-w-screen-xl mx-auto my-20">
        <div>
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
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
                <h1 class="text-xl font-semibold">Delivery Detail</h1>
                <div class="mt-5">
                    <form action="{{ route('orders.create') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="name">Name*</label><br>
                                <input type="text" name="name" placeholder="Receiver Name" class="w-full px-4 py-2 mt-2 rounded-md border" required>
                            </div>
                            <div>
                                <label for="phone">Your Phone Number*</label><br>
                                <input type="number" name="phone" placeholder="Receiver Phone Number" class="w-full px-4 py-2 mt-2 rounded-md border" required>
                            </div>
                            <div>
                                <label for="province">Province/City*</label><br>
                                <input type="text" name="province" placeholder="Select Province/City" class="w-full px-4 py-2 mt-2 rounded-md border" required>
                            </div>
                            <div>
                                <label for="district">District*</label><br>
                                <input type="text" name="district" placeholder="Select District" class="w-full px-4 py-2 mt-2 rounded-md border" required>
                            </div>
                            <div>
                                <label for="commune">Commune*</label><br>
                                <input type="text" name="commune" placeholder="Select Commune" class="w-full px-4 py-2 mt-2 rounded-md border" required>
                            </div>
                            <div>
                                <label for="village">Village*</label><br>
                                <input type="text" name="village" placeholder="Enter Your Village" class="w-full px-4 py-2 mt-2 rounded-md border" required>
                            </div>
                        </div>
                         <div>
                            <label for="order_notes">Order Notes</label><br>
                            <textarea name="order_notes" placeholder="Enter any notes about the order" class="w-full h-24 px-4 py-2 mt-2 rounded-md border"></textarea>
                        </div>
                        @foreach($selectedProducts as $product)
                            <input type="hidden" name="selected_products[]" value="{{ $product->id }}">
                        @endforeach
                        <button type="submit" class="px-4 py-2 mt-4 bg-[#17554B] rounded-full text-white text-sm w-full">Place Order</button>
                    </form>
                </div>
            </div>

            <div class="bg-[#edece5] px-10 py-5">
                @foreach($selectedProducts as $product)
                    <div class="flex justify-between items-center mt-5 border-b border-gray-500 pb-5 gap-10">
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('images/' . $product->images) }}" alt="" class="h-20">
                            <div>
                                <h1 class="text-lg font-medium">{{ $product->name }}</h1>
                                <p class="text-sm text-gray-800 font-bold">Quantity: {{ $cart[$product->id] }}</p>
                                <p class="text-sm text-gray-500">Ship every 3 weeks</p>
                            </div>
                        </div>
                        <h1 class="text-sm">${{ $product->price * $cart[$product->id] }}</h1>
                    </div>
                @endforeach

                <div class="mt-5 border-b border-gray-500 pb-5">
                    <div class="flex justify-between">
                        <p>Subtotal</p>
                        <h1 class="text-sm">
                            ${{ collect($selectedProducts)->sum(function($product) use ($cart) { return $product->price * $cart[$product->id]; }) }}
                        </h1>
                    </div>
                    <div class="flex justify-between mt-5">
                        <p>Shipping</p>
                        <p>Calculated at next step</p>
                    </div>
                </div>
                <div class="mt-5 pb-5">
                    <div class="flex justify-between">
                        <p class="text-xl font-semibold">Total</p>
                        <h1 class="text-lg font-semibold">
                            ${{ collect($selectedProducts)->sum(function($product) use ($cart) { return $product->price * $cart[$product->id]; }) }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
