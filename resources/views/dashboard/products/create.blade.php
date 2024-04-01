@extends('dashboard')

@section('content')
    <section class="max-w-screen-2xl mx-auto">
        <div class="flex justify-between items-center">
            <a href="javascript:void(0);" onclick="history.back()">
                <i class="fa-solid fa-arrow-left text-2xl bg-blue-300 px-4 py-2.5 text-gray-700 hover:bg-blue-400 rounded-full"></i>
            </a>
            <div class="flex items-center gap-2 font-semibold">
                <i class="fa-solid fa-plus"></i>
                <h1>Add A New Product</h1>
            </div>
        </div>

        {{-- form --}}
        <div class="mt-10 px-10">
            <form action="" method="post" action="" enctype="multipart/form-data">

                @csrf

                <div class="flex justify-between">
                    {{-- For name --}}
                    <div class="flex flex-col">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Product Name" required class="bg-gray-100 px-4 py-2 mt-2 rounded-md w-[450px]">
                    </div>

                    {{-- For price --}}
                    <div class="flex flex-col">
                        <label for="price">Price</label>
                        <input type="text" name="price" id="price" placeholder="Product Price" required class="bg-gray-100 px-4 py-2 mt-2 rounded-md w-[450px]">
                    </div>

                    {{-- For size --}}
                    <div class="flex flex-col">
                        <label for="size">Size</label>
                        <input type="text" name="size" id="size" placeholder="Product Size" required class="bg-gray-100 px-4 py-2 mt-2 rounded-md w-[450px]">
                    </div>
                </div>

                <div class="mt-10 flex gap-10">
                    {{-- image --}}
                    <div>
                        <label for="image">Chose Image</label>
                        <div class="flex items-center justify-center w-[450px] h-[450px] mt-2">
                            <label for="image" class="flex flex-col items-center justify-center w-full h-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <i class="fa-regular fa-image text-9xl text-gray-500"></i>
                                    <img src="" alt="" id="file-preview" style="display: none;">
                                    <p class="mb-2 text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                </div>
                                <input type="file" name="image" id="image" accept="image/*" onchange="showFile(event)" required class="hidden" />
                            </label>
                        </div> 
                    </div>
                    
                    <div class="w-full">
                        {{-- detail --}}
                        <div class="form-group">
                            <label for="detail">Detail</label>
                            <textarea class="form-control w-full mt-2 bg-gray-100 p-4 rounded-lg" rows="14" name="detail" id="detail" required placeholder="Description your product here"></textarea>
                        </div>

                        {{-- Category --}}
                        <div class="flex items-center justify-between mt-5">
                            <div class="form-group">
                                <button type="button" id="categories" data-dropdown-toggle="category-type" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Category 
                                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="category-type" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="categories">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dog</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cat</a>
                                        </li>
                                    </ul>
                                </div>
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
    
{{-- <div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <a href="javascript:void(0);" onclick="history.back()" class="bg-blue-200 px-2 py-1.5 rounded-full">
                <i class="fa-solid fa-arrow-left text-2xl"></i>
            </a>
        </div>
    </div>

    <div class="card mb-4 mt-5">
        <div class="card-body mt-2">
            <h3 class="card-title">Add New Products</h3>
            <form class="form-group mt-4" method="post" action="" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name">Name *</label>
                    <input class="form-control mt-2" type="text" name="name" id="name" required placeholder="Name">
                </div>

                <div class="form-group">
                    <label for="price">Price *</label>
                    <input class="form-control mt-2" type="text" name="price" id="price" required placeholder="Price">
                </div>

                <div class="form-group">
                    <label for="size">Size *</label>
                    <input class="form-control mt-2" type="text" name="size" id="size" required placeholder="Size">
                </div>

                <div class="form-group mt-4">
                    <label for="detail">Detail *</label>
                    <textarea class="form-control mt-2" name="detail" id="detail" required placeholder="Detail"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label for="image" class="form-label">Image *</label>
                    <img src="" alt="" id="file-preview" style="display: none;">
                    <input class="form-control" type="file" name="image" id="image" accept="image/*" onchange="showFile(event)" required>
                </div>

                <div class="form-group mt-4">
                    <label for="category">Category:</label><br>
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" name="submit" class="btn btn-primary mt-4">ADD</button>
            </form>
        </div>
    </div>
</div> --}}
@endsection

@push('scripts')
<script>
    function showFile(event) {
        var input = event.target;
        var reader = new FileReader();
        reader.onload = function() {
            var dataURL = reader.result;
            var output = document.getElementById('file-preview');
            output.src = dataURL;
            output.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>
@endpush
