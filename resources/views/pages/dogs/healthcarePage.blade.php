@extends('pages.dogs.index')
@section('content')
    <div class="grid grid-cols-4 gap-4 mt-10">
        {{-- loop --}}    
        <div class="border border-gray-200">
            <div>
                <a href="#">
                    <img src="{{asset('https://www.petzo.net/wp-content/uploads/2024/03/Palmers-for-Pets-Coconut-Oil-Formula-Hydrates-Dry-Paws-Nose-Swivel-Stick-for-Dog-14g-min.jpg')}}" alt="" class="w-full h-[350px] object-cover">
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
@endsection