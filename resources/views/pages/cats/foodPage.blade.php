@extends('pages.cats.index')
@section('content')
    <div class="grid grid-cols-4 gap-4">
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
@endsection
