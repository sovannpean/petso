<x-app-layout>
    <div style="background-image: url({{ url('image/main-banner.jpeg') }});">
        <div class="h-[487px] relative max-w-screen-xl mx-auto">
            <nav class="absolute top-40 right-10">
                <h1 class="mb-4 text-center text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-[#192a82] from-[#828ecf]">Chose Pets</span></h1>
                <div class="flex justify-end gap-5 mt-5">
                    <div class="bg-[#115542] hover:bg-[#226753] px-5 py-2 rounded-lg">
                        <a href="#">
                            <i class="fa-solid fa-bowl-rice text-white text-2xl pr-2"></i>
                            <label for="all" class="text-xl text-white">All</label>
                        </a>
                    </div>
                    <div class="bg-[#115542] hover:bg-[#226753] px-5 py-2 rounded-lg">
                        <a href="#">
                            <i class="fa-solid fa-shield-dog text-white text-2xl pr-2"></i>
                            <label for="dog" class="text-xl text-white">Dog Food</label>
                        </a>
                    </div>
                    <div class="bg-[#115542] hover:bg-[#226753] px-5 py-2 rounded-lg">
                        <a href="#">
                            <i class="fa-solid fa-shield-cat text-white text-2xl pr-2"></i>
                            <label for="cat" class="text-xl text-white">Cat Food</label>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    {{-- body --}}
    <div class="max-w-screen-xl mx-auto">
        <div>
            {{-- for All products --}}
            <div class="my-10">
                <div class="mb-5">
                    <div class="flex items-center gap-10">
                        <hr class="w-full h-1 bg-gray-400 border-0 rounded">
                        <h1 class="text-2xl font-semibold">Products</h1>
                        <hr class="w-full h-1 bg-gray-400 border-0 rounded">
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
                            <img src="{{asset('image/dogfood3.jpeg')}}" alt="" class="w-full h-[350px] object-cover">
                        </div>
                        <div class="bg-[#48b194]">
                            <div class="flex justify-between items-center p-4">
                                <div>
                                    <h1 class="font-bold text-[#602b05]">ETIAM GRADRE</h1>
                                    <h1 class="font-semibold text-gray-100">$140.43</h1>
                                    <h1 class="line-through text-sm">$160.00</h1>
                                </div>
                                <div class="flex gap-2">
                                    <a href="#" class="bg-white hover:border-[#115542] hover:border rounded-md">
                                        <i class="fa-regular fa-heart p-2"></i>
                                    </a>
                                    <a href="#" class="bg-white hover:border-[#115542] hover:border rounded-md">
                                        <i class="fa-solid fa-cart-plus p-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border border-gray-200">
                        <div>
                            <img src="{{asset('image/dogfood1.webp')}}" alt="" class="w-full h-[350px] object-cover">
                        </div>
                        <div class="bg-[#48b194]">
                            <div class="flex justify-between items-center p-4">
                                <div>
                                    <h1 class="font-bold text-[#602b05]">ETIAM GRADRE</h1>
                                    <h1 class="font-semibold">$140.43</h1>
                                    <h1 class="line-through text-sm">$160.00</h1>
                                </div>
                                <div class="flex gap-2">
                                    <a href="#" class="bg-white hover:border-[#115542] hover:border rounded-md">
                                        <i class="fa-regular fa-heart p-2"></i>
                                    </a>
                                    <a href="#" class="bg-white hover:border-[#115542] hover:border rounded-md">
                                        <i class="fa-solid fa-cart-plus p-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border border-gray-200">
                        <div>
                            <img src="{{asset('image/dogfood2.webp')}}" alt="" class="w-full h-[350px] object-cover">
                        </div>
                        <div class="bg-[#48b194]">
                            <div class="flex justify-between items-center p-4">
                                <div>
                                    <h1 class="font-bold text-[#602b05]">ETIAM GRADRE</h1>
                                    <h1 class="font-semibold">$140.43</h1>
                                    <h1 class="line-through text-sm">$160.00</h1>
                                </div>
                                <div class="flex gap-2">
                                    <a href="#" class="bg-white hover:border-[#115542] hover:border rounded-md">
                                        <i class="fa-regular fa-heart p-2"></i>
                                    </a>
                                    <a href="#" class="bg-white hover:border-[#115542] hover:border rounded-md">
                                        <i class="fa-solid fa-cart-plus p-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border border-gray-200">
                        <div>
                            <img src="{{asset('image/dogfood3.jpeg')}}" alt="" class="w-full h-[350px] object-cover">
                        </div>
                        <div class="bg-[#48b194]">
                            <div class="flex justify-between items-center p-4">
                                <div>
                                    <h1 class="font-bold text-[#602b05]">ETIAM GRADRE</h1>
                                    <h1 class="font-semibold">$140.43</h1>
                                    <h1 class="line-through text-sm">$160.00</h1>
                                </div>
                                <div class="flex gap-2">
                                    <a href="#" class="bg-white hover:border-[#115542] hover:border rounded-md">
                                        <i class="fa-regular fa-heart p-2"></i>
                                    </a>
                                    <a href="#" class="bg-white hover:border-[#115542] hover:border rounded-md">
                                        <i class="fa-solid fa-cart-plus p-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>

    {{-- for discount --}}
    <div class="my-20">
        <div class="bg-[#48b194] h-[350px]">
            <div class="max-w-screen-xl mx-auto">
                <div class="flex justify-between items-center">
                    <div>
                        <h1>OVER 200 PRODUCTS</h1>
                        <h1>SALE OFF</h1>
                        <h1>UP TO 50%</h1>
                        <ul>
                            <li>
                                <i class="fa-regular fa-circle-check"></i>
                                Cat's Food
                            </li>
                            <li>
                                <i class="fa-regular fa-circle-check"></i>
                                Dog's Food
                            </li>
                        </ul>
                    </div>
                    <div>
                        <img src="{{asset('image/banner-content2.png')}}" alt="">
                    </div>
                    <div>
                        <h1>FORM $3.00</h1>
                        <hr class="h-4 bg-yellow-300 border-0 rounded">
                        <h1>TO $25.00</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- for new --}}
    <div></div>
</x-app-layout>