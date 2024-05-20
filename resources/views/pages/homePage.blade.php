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
                        <a href="/food-cat">
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
            {{-- for new products --}}
            <div class="my-10">
                <div class="mb-5">
                    <div class="flex items-center justify-between">
                        <hr class="w-[520px] h-1 bg-gray-400 border-0 rounded">
                        <h1 class="text-2xl font-semibold">New Products</h1>
                        <h1 class="text-2xl font-semibold">New Products</h1>
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
                    @if($products->isEmpty())
                        <p>No products available.</p>
                    @else
                        @foreach($products->take(4) as $product)
                            {{-- <li>{{ $product->name }}</li> --}}
                            <div class="border border-gray-200 bg-[#48b194]">
                                <div class="bg-gray-100">
                                    <a href="/detail-product">
                                        <img src="{{ asset('/images/' . $product->images) }}" alt="" class="w-full h-[350px] object-cover">
                                    </a>
                                </div>
                                <div class="p-4">
                                    <h1 class="font-bold text-[#602b05]">{{ $product->name }}</h1>
                                    <div class="flex justify-between items-center mt-2">
                                        <div>
                                            <a href="/detail-product">
                                                {{-- <h1 class="font-bold text-[#602b05]">{{ $product->name }}</h1> --}}
                                                <h1 class="font-semibold text-gray-100">{{ $product->price }}$</h1>
                                                <h1 class="text-sm"><span class="font-semibold">SIZE:</span> {{ $product->size }}</h1>
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
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- for discount --}}
    <div class="my-20">
        <div class="bg-[#48b194] h-[350px]">
            <div class="max-w-screen-xl mx-auto">
                <div class="flex items-center">
                    <div> 
                        <h1 class="text-sm font-bold">OVER 200 PRODUCTS</h1>
                        <h1 class="text-3xl mt-2 font-extrabold text-[#602b05] dark:text-white">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r to-[#0a4723] from-[#602b05]">
                                SALE OFF
                            </span><br> UP TO 50%
                        </h1>
                        <ul class="text-[#602b05]">
                            <li>
                                <i class="fa-regular fa-circle-check"></i>
                                Dry Food
                            </li>
                            <li>
                                <i class="fa-regular fa-circle-check"></i>
                                Wet Food
                            </li>
                            <li>
                                <i class="fa-regular fa-circle-check"></i>
                                Pet Toys
                            </li>
                        </ul>
                    </div>
                    <div class="w-[949px]">
                        <img src="{{asset('image/banner-content2.png')}}" alt="" >
                    </div>
                    <div>
                        <h1 class="text-xl font-semibold text-[#602b05]">FROM $3.00</h1>
                        <div class="flex items-center gap-2">
                            <hr class="h-3 bg-yellow-300 border-0 w-[50px]">
                            <h1 class="text-sm font-semibold text-[#602b05]">TO </h1>
                            <h1 class="text-xl font-semibold text-[#602b05]">$25.00</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-screen-xl mx-auto mt-20">
            {{-- card --}}
            <div class="grid grid-cols-4 gap-4">
                {{-- loop --}}
                <div class="border border-gray-200 relative top-0">
                    <div class="absolute top-0 left-0 bg-[#499e86] hover:bg-[#115542] ml-4 rounded-b-full cursor-pointer">
                        <h1 style="writing-mode: vertical-lr;" class="px-0.5 pt-2 pb-5 text-sm text-gray-100 font-bold"> 50% </h1>
                    </div>
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

                <div class="border border-gray-200 relative top-0">
                    <div class="absolute top-0 left-0 bg-[#499e86] hover:bg-[#115542] ml-4 rounded-b-full cursor-pointer">
                        <h1 style="writing-mode: vertical-lr;" class="px-0.5 pt-2 pb-5 text-sm text-gray-100 font-bold"> 50% </h1>
                    </div>
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

                <div class="border border-gray-200 relative top-0">
                    <div class="absolute top-0 left-0 bg-[#499e86] hover:bg-[#115542] ml-4 rounded-b-full cursor-pointer">
                        <h1 style="writing-mode: vertical-lr;" class="px-0.5 pt-2 pb-5 text-sm text-gray-100 font-bold"> 50% </h1>
                    </div>
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

                <div class="border border-gray-200 relative top-0">
                    <div class="absolute top-0 left-0 bg-[#499e86] hover:bg-[#115542] ml-4 rounded-b-full cursor-pointer">
                        <h1 style="writing-mode: vertical-lr;" class="px-0.5 pt-2 pb-5 text-sm text-gray-100 font-bold"> 50% </h1>
                    </div>
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
            </div>

        </div>
    </div>

    {{-- for more --}}
    <div class="max-w-screen-xl mx-auto">
        <div>
            {{-- for All products --}}
            <div class="my-10">
                <div class="mb-5">
                    <div class="flex items-center justify-between">
                        <hr class="w-[520px] h-1 bg-gray-400 border-0 rounded">
                        <h1 class="text-2xl font-semibold">All Products</h1>
                        <h1 class="text-2xl font-semibold">All Products</h1>
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
                            <a href="#">
                                <img src="{{asset('image/dogfood3.jpeg')}}" alt="" class="w-full h-[350px] object-cover">
                            </a>
                        </div>
                        <div class="bg-[#48b194]">
                            <div class="flex justify-between items-center p-4">
                                <div>
                                    <a href="#">
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
        </div>
    </div>
</x-app-layout>