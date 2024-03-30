<x-app-layout>
    <section class="max-w-screen-2xl mx-auto my-5">

        {{-- Banner --}}
        <div class="md:grid lg:grid-cols-3 gap-4 h-[500px]">
            <div class="col-span-2 relative">
                <img src="{{asset('/image/banner.avif')}}" alt="" class="h-full rounded-xl">
                <div class="absolute top-28 left-24">
                    <h1 class="text-4xl font-semibold">Welcome to PetSo</h1>
                    <h1 class="text-xl mt-5 text-gray-600">Do you need to feed your pet, <br> you are now coming to the right place?</h1>
                    <div class="mt-5">
                        <x-button />
                    </div>
                </div>
            </div>
            <div class="h-full flex flex-col justify-between">
                <div>
                    <a href="#">
                        <img src="{{asset('image/banner1.png')}}" alt="" class="rounded-xl">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{asset('image/banner2.png')}}" alt="" class="rounded-xl">
                    </a>
                </div>
            </div>
        </div>

    </section>
    
</x-app-layout>