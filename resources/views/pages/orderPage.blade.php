<x-app-layout>
    <section class="max-w-screen-2xl mx-auto my-20">
        <div class="grid grid-cols-2 gap-5">
            <div>
                <h1 class="text-xl font-semibold">Delivery Detail</h1>
                <div class="mt-5">
                    <form action="">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="name">Name*</label><br>
                                <input type="text" placeholder="Receiver Name" class="w-full px-4 py-2 mt-2 rounded-md border" required>
                            </div>
                            <div>
                                <label for="phone">Your Phone Number*</label><br>
                                <input type="number" placeholder="Receiver Phone Number" class="w-full px-4 py-2 mt-2 rounded-md border" required>
                            </div>
                            <div>
                                <label for="province">Province/City*</label><br>
                                <input type="text" placeholder="Select Province/City" class="w-full px-4 py-2 mt-2 rounded-md border" required>
                            </div>
                            <div>
                                <label for="district">District/Khan*</label><br>
                                <input type="text" placeholder="Select District/Khan" class="w-full px-4 py-2 mt-2 rounded-md border" required>
                            </div>
                            <div>
                                <label for="commune">Commune/Sangkat*</label><br>
                                <input type="text" placeholder="Select Commune/Sangkat" class="w-full px-4 py-2 mt-2 rounded-md border" required>
                            </div>
                            <div>
                                <label for="house">House & Street Address*</label><br>
                                <input type="text" placeholder="e.g. #23, Near..." class="w-full px-4 py-2 mt-2 rounded-md border" required>
                            </div>
                        </div>
                        <div class="mt-5">
                            <label for="email">Email (Optional)</label>
                            <input type="email" placeholder="example@gmail.com" class="w-full px-4 py-2 mt-2 rounded-md border">
                        </div>
                        <div class="mt-5">
                            <label for="order-notes">Order notes (Optional)</label>
                            <textarea name="order-notes" id="order-notes" rows="5" class="w-full border rounded-md mt-2 px-4 py-2" placeholder="Our delivery partner unable to bring package to your Apartment room and No Hourly Schedule Delivery available."></textarea>
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
                    </form>
                </div>
            </div>

            {{-- product ordered --}}
            <div class="bg-[#edece5] px-10 py-5">
                {{-- loop --}}
                <div class="flex justify-between items-center mt-5 border-b border-gray-500 pb-5 gap-10">
                    <div class="flex items-center gap-4">
                        <img src="{{asset('image/dogfood3.jpeg')}}" alt="" class="h-20">
                        <div>
                            <h1 class="text-lg font-medium">SmartHeart Puppy Dry Food Chicken Egg & Milk Flavor 1.3Kg</h1>
                            <p class="text-sm text-gray-800 font-bold">2</p>
                            <p class="text-sm text-gray-500">Ship every 3 weeks</p>
                        </div>    
                    </div>
                    <p>$6.5</p>
                </div>

                <div class="flex justify-between items-center mt-5 border-b border-gray-500 pb-5 gap-10">
                    <div class="flex items-center gap-4">
                        <img src="{{asset('image/dogfood3.jpeg')}}" alt="" class="h-20">
                        <div>
                            <h1 class="text-lg font-medium">SmartHeart Puppy Dry Food Chicken Egg & Milk Flavor 1.3Kg</h1>
                            <p class="text-sm text-gray-800 font-bold">2</p>
                            <p class="text-sm text-gray-500">Ship every 3 weeks</p>
                        </div>    
                    </div>
                    <p>$6.5</p>
                </div>

                <div class="mt-5 border-b border-gray-500 pb-5">
                    <div class="flex justify-between">
                        <p>Subtotal</p>
                        <p>$13</p>
                    </div>
                    <div class="flex justify-between mt-5">
                        <p>Shipping</p>
                        <p>Calculated at next step</p>
                    </div>
                </div>
                <div class="mt-5 pb-5">
                    <div class="flex justify-between">
                        <p class="text-xl font-semibold">Total</p>
                        <p class="text-xl font-bold">$13</p>
                    </div>
                </div>
            </div>
        </div>
        
    </section> 
</x-app-layout>
