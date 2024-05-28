<x-app-layout>
    <section class="max-w-screen-xl mx-auto my-20">
        <div class="grid grid-cols-2 gap-5">
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
                                <label for="district">District/Khan*</label><br>
                                <input type="text" name="district" placeholder="Select District/Khan" class="w-full px-4 py-2 mt-2 rounded-md border" required>
                            </div>
                            <div>
                                <label for="commune">Commune/Sangkat*</label><br>
                                <input type="text" name="commune" placeholder="Select Commune/Sangkat" class="w-full px-4 py-2 mt-2 rounded-md border" required>
                            </div>
                            <div>
                                <label for="house">House & Street Address*</label><br>
                                <input type="text" name="house" placeholder="e.g. #23, Near..." class="w-full px-4 py-2 mt-2 rounded-md border" required>
                            </div>
                        </div>
                        <div class="mt-5">
                            <label for="email">Email (Optional)</label>
                            <input type="email" name="email" placeholder="example@gmail.com" class="w-full px-4 py-2 mt-2 rounded-md border">
                        </div>
                        <div class="mt-5">
                            <label for="order-notes">Order notes (Optional)</label>
                            <textarea name="order_notes" id="order-notes" rows="5" class="w-full border rounded-md mt-2 px-4 py-2" placeholder="Our delivery partner unable to bring package to your Apartment room and No Hourly Schedule Delivery available."></textarea>
                        </div>
                        <div class="flex justify-between mt-5">
                            <a href="#" class="hover:text-blue-500 hover:underline">
                                <div class="flex items-center gap-2">
                                    <i class="fa-solid fa-chevron-left text-sm"></i>
                                    <p>Return to cart</p>
                                </div>
                            </a>
                            <button class="bg-blue-800 hover:bg-blue-700 px-10 text-white rounded-lg py-2">Order</button>
                        </div>
                        @foreach($selectedProducts as $product)
                            <input type="hidden" name="selected_products[]" value="{{ $product->id }}">
                        @endforeach
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
                                <p class="text-sm text-gray-800 font-bold">Quantity: 1</p>
                                <p class="text-sm text-gray-500">Ship every 3 weeks</p>
                            </div>
                        </div>
                        <p>{{ $product->price }}$</p>
                    </div>
                @endforeach

                <div class="mt-5 border-b border-gray-500 pb-5">
                    <div class="flex justify-between">
                        <p>Subtotal</p>
                        <p>{{ $selectedProducts->sum('price') }}$</p>
                    </div>
                    <div class="flex justify-between mt-5">
                        <p>Shipping</p>
                        <p>Calculated at next step</p>
                    </div>
                </div>
                <div class="mt-5 pb-5">
                    <div class="flex justify-between">
                        <p class="text-xl font-semibold">Total</p>
                        <p class="text-xl font-bold">{{ $selectedProducts->sum('price') }}$</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
