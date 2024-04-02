@extends('dashboard')

@section('content')
    <section class="max-w-screen-2xl mx-auto">
        <div class="flex justify-between items-center px-10">
            <a href="javascript:void(0);" onclick="history.back()">
                <i class="fa-solid fa-arrow-left text-2xl bg-blue-300 px-4 py-2.5 text-gray-700 hover:bg-blue-400 rounded-full"></i>
            </a>
            <div class="flex items-center gap-2 font-semibold">
                <i class="fa-solid fa-pen-to-square"></i>
                <h1>Please update the Pets information</h1>
            </div>
        </div>

        {{-- form --}}
        <div class="mt-10 px-10">
            <form action="{{ url('/dashboard/products/update/' . $products->id) }}" method="post" action="" enctype="multipart/form-data">

                {!! csrf_field() !!}

                <div class="flex justify-between">
                    {{-- For name --}}
                    <div class="flex flex-col">
                        <label for="ename">Name</label>
                        <input type="text" name="name" id="name" value="{{ $products->name }}" placeholder="Product Name" required class="bg-gray-100 px-4 py-2 mt-2 rounded-md w-[450px]">
                    </div>

                    {{-- For price --}}
                    <div class="flex flex-col">
                        <label for="price">Price</label>
                        <input type="text" name="price" id="price" value="{{ $products->price }}" placeholder="Product Price" required class="bg-gray-100 px-4 py-2 mt-2 rounded-md w-[450px]">
                    </div>

                    {{-- For size --}}
                    <div class="flex flex-col">
                        <label for="size">Size</label>
                        <input type="text" name="size" id="size" value="{{ $products->size }}" placeholder="Product Size" required class="bg-gray-100 px-4 py-2 mt-2 rounded-md w-[450px]">
                    </div>
                </div>

                <div class="mt-10 flex gap-10">
                    {{-- image --}}
                    <div>
                        <label for="image" class="form-label">Image</label>
                        <label for="image" class="cursor-pointer">
                            <div class="w-[450px] h-[430px] border-2 border-gray-300 border-dashed flex flex-col items-center justify-center relative">
                                <i class="fa-regular fa-image text-9xl text-gray-400"></i>
                                <img src="" id="image-preview" class="text-white absolute w-full">
                                <p class="mb-2 text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <input class="form-control hidden" type="file" name="image" id="image" accept="images/*" onchange="showFile(event)" required>
                            </div>
                        </label>
                    </div>
                    
                    <div class="w-full">
                        {{-- detail --}}
                        <div class="form-group">
                            <label for="detail">Detail</label>
                            <textarea class="form-control w-full mt-2 bg-gray-100 p-4 rounded-lg" rows="14" name="detail" id="detail" required placeholder="Detail your product">{{ $products->detail }}</textarea>
                        </div>

                        {{-- Category --}}
                        <div class="flex items-center justify-between mt-5 text-gray-200">
                            <div class="flex gap-2 font-medium bg-blue-600 px-5 py-2.5 text-center rounded-lg">
                                <label for="category">Category:</label><br>
                                <select name="category_id" class="form-control hover:cursor-pointer bg-blue-600">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <button type="submit" name="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg px-5 py-2.5 text-center">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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

