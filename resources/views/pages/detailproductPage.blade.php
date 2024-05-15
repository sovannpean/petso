<x-app-layout>
    <section class="bg-white dark:bg-gray-900 antialiased pb-20">
        <div class="bg-gray-100 py-4">
            <div class="max-w-screen-xl mx-auto">
                <div class="flex gap-3">
                    <a href="/" class="hover:text-[#115542]">
                        <label for="home" class="cursor-pointer font-bold">HOME</label>
                        <i class="fa-solid fa-caret-right"></i>    
                    </a>
                    <a href="#" class="hover:text-[#115542]">
                        <label for="home" class="cursor-pointer font-bold">DOG</label>
                        <i class="fa-solid fa-caret-right"></i>    
                    </a>
                    <a href="#" class="hover:text-[#115542]">
                        <label for="home" class="cursor-pointer font-bold">DETAIL PRODUCT</label>
                    </a>
                </div>
            </div>
        </div>
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0 mt-10">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                    <img class="w-full dark:hidden" src="{{asset('image/dogfood3.jpeg')}}" alt="" />
                </div>

                <div class="mt-6 sm:mt-8 lg:mt-0">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                        Etiam Gradre
                    </h1>
                    <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
                        <p class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-white">
                            $1,249.99
                        </p>

                        <div class="flex items-center gap-2 mt-2 sm:mt-0">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                            </div>
                            <p class="text-sm font-medium leading-none text-gray-500 dark:text-gray-400">
                                (5.0)
                            </p>
                            <a href="#"
                                class="text-sm font-medium leading-none text-gray-900 underline hover:no-underline dark:text-white">
                                345 Reviews
                            </a>
                        </div>
                    </div>

                    <div class="mt-6 sm:gap-4 sm:items-center sm:flex sm:mt-8">
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
                        <a href="#" title=""
                            class="flex items-center justify-center py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                            role="button">
                            <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                            </svg>
                            Add to favorites
                        </a>

                        <a href="#" title=""
                            class="text-white mt-4 sm:mt-0 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 flex items-center justify-center"
                            role="button">
                            <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                            </svg>

                            Add to cart
                        </a>
                    </div>

                    <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />

                    <p class="mb-6 text-gray-500 dark:text-gray-400">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                    </p>
                </div>
            </div>
        </div>

        {{-- relation products --}}
        <div class="max-w-screen-xl mx-auto mt-20">
            <div class="mb-5">
                <div class="flex items-center justify-between">
                    <hr class="w-[520px] h-1 bg-gray-400 border-0 rounded">
                    <h1 class="text-2xl font-semibold">Related Product</h1>
                    <hr class="w-[520px] h-1 bg-gray-400 border-0 rounded">
                </div>
                <div class="text-center text-[#af9a4f]">
                    <i class="fa-solid fa-star-of-david text-sm"></i>
                    <i class="fa-solid fa-star-of-david text-sm"></i>
                    <i class="fa-solid fa-star-of-david text-sm"></i>
                </div>
            </div>
            <div class="grid grid-cols-4 gap-4">
                {{-- loop --}}
                <div class="border border-gray-200">
                    <div>
                        <a href="/detail-product">
                            <img src="{{asset('image/dogfood3.jpeg')}}" alt="" class="w-full h-[350px] object-cover">
                        </a>
                    </div>
                    <div class="bg-[#48b194]">
                        <div class="flex justify-between items-center p-4">
                            <div>
                                <a href="/detail-product">
                                    <h1 class="font-bold text-[#602b05]">ETIAM GRADRE</h1>
                                    <h1 class="font-semibold text-gray-100">$140.43</h1>
                                    <h1 class="line-through text-sm">$160.0</h1>
                                </a>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="flex gap-2">
                                    <a href="#" class="bg-white hover:border-[#115542] hover:border rounded-md">
                                        <i class="fa-solid fa-heart p-2 text-red-900"></i>
                                    </a>
                                    <a href="#" class="bg-white hover:border-[#115542] hover:border rounded-md">
                                        <i class="fa-solid fa-cart-plus p-2"></i>
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
                        </div>
                    </div>
                </div>

                <div class="border border-gray-200">
                    <div>
                        <a href="#">
                            <img src="{{asset('image/dogfood1.webp')}}" alt="" class="w-full h-[350px] object-cover">
                        </a>
                    </div>
                    <div class="bg-[#48b194]">
                        <div class="flex justify-between items-end p-4">
                            <div>
                                <a href="#">
                                    <h1 class="font-bold text-[#602b05]">ETIAM GRADRE</h1>
                                    <h1 class="font-semibold text-gray-100">$140.43</h1>
                                    <h1 class="line-through text-sm">$160.00</h1>
                                </a>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="flex gap-2">
                                    <a href="#" class="bg-white hover:border-[#115542] hover:border rounded-md">
                                        <i class="fa-regular fa-heart p-2"></i>
                                    </a>
                                    <a href="#" class="bg-white hover:border-[#115542] hover:border rounded-md">
                                        <i class="fa-solid fa-cart-plus p-2"></i>
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
                        </div>
                    </div>
                </div>

                <div class="border border-gray-200">
                    <div>
                        <a href="#">
                            <img src="{{asset('image/dogfood2.webp')}}" alt="" class="w-full h-[350px] object-cover">
                        </a>
                    </div>
                    <div class="bg-[#48b194]">
                        <div class="flex justify-between items-end p-4">
                            <div>
                                <a href="#">
                                    <h1 class="font-bold text-[#602b05]">ETIAM GRADRE</h1>
                                    <h1 class="font-semibold text-gray-100">$140.43</h1>
                                    <h1 class="line-through text-sm">$160.00</h1>
                                </a>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="flex gap-2">
                                    <a href="#" class="bg-white hover:border-[#115542] hover:border rounded-md">
                                        <i class="fa-regular fa-heart p-2"></i>
                                    </a>
                                    <a href="#" class="bg-white hover:border-[#115542] hover:border rounded-md">
                                        <i class="fa-solid fa-cart-plus p-2"></i>
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
                        </div>
                    </div>
                </div>

                <div class="border border-gray-200">
                    <div>
                        <a href="#">
                            <img src="{{asset('image/dogfood3.jpeg')}}" alt="" class="w-full h-[350px] object-cover">
                        </a>
                    </div>
                    <div class="bg-[#48b194]">
                        <div class="flex justify-between items-end p-4">
                            <div>
                                <a href="#">
                                    <h1 class="font-bold text-[#602b05]">ETIAM GRADRE</h1>
                                    <h1 class="font-semibold text-gray-100">$140.43</h1>
                                    <h1 class="line-through text-sm">$160.00</h1>
                                </a>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="flex gap-2">
                                    <a href="#" class="bg-white hover:border-[#115542] hover:border rounded-md">
                                        <i class="fa-regular fa-heart p-2"></i>
                                    </a>
                                    <a href="#" class="bg-white hover:border-[#115542] hover:border rounded-md">
                                        <i class="fa-solid fa-cart-plus p-2"></i>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>