<x-app-layout>
    <section class="max-w-screen-xl mx-auto my-10">
        <div class="grid grid-cols-3 gap-10">
            <div class="col-span-2">
                <div class="flex justify-between items-end">
                    <h1 class="text-2xl font-semibold">Shoping Cart</h1>
                    <a href="/" class="text-sm underline hover:text-blue-700">Continue Shopping</a>
                </div>
                <div>
                    {{-- loop --}}
                    <div class="flex justify-between mt-5 border-b pb-5">
                        <div class="flex items-center gap-4">
                            <a href="#" class="flex gap-4">
                                <img src="{{asset('image/dogfood3.jpeg')}}" alt="" class="h-20">
                            </a>
                            <div>
                                <a href="#">
                                    <h1 class="text-lg font-medium">SmartHeart Puppy Dry Food Chicken Egg & Milk Flavor 1.3Kg</h1>
                                    <p class="text-sm text-gray-500">$6.5</p>    
                                </a>
                                <div class="flex items-center">
                                    <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                        <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                        </svg>
                                    </button>
                                    <input type="text" id="counter-input" data-input-counter class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0 dark:text-white" placeholder="" value="1" required />
                                    <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                        <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>    
                        </div>
                        <div class="flex flex-col justify-between items-end">
                            <i class="fa-solid fa-xmark"></i>
                            <p>$6.5</p>
                        </div>
                    </div>
                    <div class="flex justify-between mt-5 border-b pb-5">
                        <div class="flex items-center gap-4">
                            <a href="#" class="flex gap-4">
                                <img src="{{asset('image/dogfood3.jpeg')}}" alt="" class="h-20">
                            </a>
                            <div>
                                <a href="#">
                                    <h1 class="text-lg font-medium">SmartHeart Puppy Dry Food Chicken Egg & Milk Flavor 1.3Kg</h1>
                                    <p class="text-sm text-gray-500">$6.5</p>    
                                </a>
                                <div class="flex items-center">
                                    <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                        <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                        </svg>
                                    </button>
                                    <input type="text" id="counter-input" data-input-counter class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0 dark:text-white" placeholder="" value="1" required />
                                    <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                        <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>    
                        </div>
                        <div class="flex flex-col justify-between items-end">
                            <i class="fa-solid fa-xmark"></i>
                            <p>$6.5</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h1 class="text-2xl font-semibold">Cart Totals</h1>
                <div class="mt-5 p-4">
                    <div class="flex justify-between border-b-2 border-t-2 py-4">
                        <h1 class="font-bold text-xl">Subtotal</h1>
                        <h1>$6.50</h1>
                    </div>
                    <div class="bg-[#17554B] w-full py-2 mt-4 rounded-full">
                        <a href="/order">
                            <p class="text-center text-gray-100 text-sm">Check Out</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>