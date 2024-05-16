@extends('dashboard')

@section('content')
    <section class="max-w-screen-2xl mx-auto px-10">
        <div class="flex justify-between items-center">
            <a href="javascript:void(0);" onclick="history.back()">
                <i class="fa-solid fa-arrow-left text-2xl bg-blue-300 px-4 py-2.5 text-gray-700 hover:bg-blue-400 rounded-full"></i>
            </a>
            <div class="flex items-center gap-2 font-semibold">
                <i class="fa-solid fa-pen-to-square"></i>
                <h1>Please update the Pets information</h1>
            </div>
        </div>

        {{-- Show Products --}}
        <div class="mt-20 grid grid-cols-2">
            {{-- For image --}}
            <div class="w-[600px] h-[450px] border-2 border-dashed border-rose-200">
                <img src="{{ asset('/images/' . $products->images) }}" onchange="showFile(event)" class="w-full h-full object-cover">
            </div>

            {{-- About product --}}
            <div class="text-lg font-medium">
                <div class="flex gap-5 items-center">
                    <h1>For: </h1>
                    @foreach($categories as $category)
                        <h1 value="{{ $category->id }}" class="text-2xl font-semibold text-blue-900">
                            {{ $category->name }}
                        </h1>
                    @endforeach
                </div>

                <h1>Name  : {{ $products->name }}</h1>
                <h1 class="text-rose-500">Price : {{ $products->price }}</h1>
                <h1>Size  : {{ $products->size}}</h1>
                <h1>Detail: {{ $products->detail}}</h1>
                <h1 type="file" name="image" id="image" accept="images/*" onchange="showFile(event)" >Detail: {{ $products->images}}</h1>
            </div>
        </div>
        
    </section>
    <script>
        function showFile(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function () {
                var dataURL = reader.result;
                var output = document.getElementById('image-preview');
                output.src = dataURL;
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>
@endsection  
