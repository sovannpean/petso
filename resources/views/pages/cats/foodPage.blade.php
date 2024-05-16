<x-app-layout>
    <div style="background-image: url({{ url('image/main-banner.jpeg') }});">
        <div class="h-[487px] relative max-w-screen-xl mx-auto">
            <div class="absolute top-20 right-0">
                <h1 class="text-5xl font-extrabold text-gray-900 dark:text-white">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-[#192a82] from-[#828ecf]">Making healthier dog <br> food a reality.</span>
                </h1>
                <p class="text-2xl text-gray-100 mt-4">High quality ingredients, balanced by experts.</p>
            </div>
            <nav class="absolute bottom-[-20px] right-0">
                <div class="flex justify-end gap-5">
                    <div class="bg-white py-2 px-8 rounded-xl">
                        <a href="/food-dog">
                            <h1 class="mb-2 font-bold">Dogs</h1>
                            <img src="{{asset('image/dog.png')}}" alt="" class="w-32 object-cover">
                        </a>
                    </div>
                    <div class="bg-white py-2 px-8 rounded-xl">
                        <a href="#">
                            <h1 class="mb-2 font-bold">Cats</h1>
                            <img src="{{asset('image/cat.png')}}" alt="" class="w-32 object-cover">
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    {{-- for food pet --}}
    <div class="max-w-screen-xl mx-auto">
        <div>
            {{-- For Dogs --}}
            <div class="my-20">
                <div class="mb-5">
                    <h1 class="text-4xl font-bold text-center font-serif">Find Products For Your Cats</h1>
                    <div class="flex justify-center gap-5 mt-5">
                        <a href="#" class="bg-[#48b194] px-5 py-1.5 rounded-full">
                            <h1 class="text-white font-medium">Food</h1>
                        </a>
                        <a href="/healthcare-cat" class="border border-[#48b194] px-5 py-1.5 rounded-full">
                            <h1 class="text-gray-900 font-medium">Healthcare</h1>
                        </a>
                        <a href="/toy-cat" class="border border-[#48b194] px-5 py-1.5 rounded-full">
                            <h1 class="text-gray-900 font-medium">Toy</h1>
                        </a>
                        <a href="/treat-cat" class="border border-[#48b194] px-5 py-1.5 rounded-full">
                            <h1 class="text-gray-900 font-medium">Treat</h1>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-4 gap-4 mt-10">
                    {{-- loop --}}
                    <div class="border border-gray-200">
                        <div>
                            <a href="/detail-product">
                                <img src="{{asset('http://joomla.vinagecko.net/t/vina_fobe/images/stories/virtuemart/product/11.jpg')}}" alt="" class="w-full h-[350px] object-cover">
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
                </div>
            </div>
        </div>
    </div>

</x-app-layout>