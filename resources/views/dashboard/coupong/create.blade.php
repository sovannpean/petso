@extends('dashboard')

@section('content')
    <section class="max-w-screen-2xl mx-auto">
        <div class="flex justify-between items-center">
            <a href="javascript:void(0);" onclick="history.back()">
                <i class="fa-solid fa-arrow-left text-2xl bg-blue-300 px-4 py-2.5 text-gray-700 hover:bg-blue-400 rounded-full"></i>
            </a>
            <div class="flex items-center gap-2 font-semibold">
                <i class="fa-solid fa-plus"></i>
                <h1>Add A New Coupong</h1>
            </div>
        </div>
        {{-- form --}}
        <div class="mt-10 px-10">
            <form action="{{ route('dashboard.coupong.store') }}" method="post" id="discountForm" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-2 gap-5">
                    <div>
                        {{-- For code --}}
                        <div class="flex flex-col">
                            <label for="price">Code</label>
                            <input type="text" name="price" id="price" placeholder="Product Price" required class="bg-gray-100 px-4 py-2 mt-2 rounded-md">
                        </div>
    
                        {{-- For Discount --}}
                        <div class="flex flex-col mt-5">
                            <label for="size">Discount Amount</label>
                            <input type="discount-amount" name="discount-amount" id="discount-amount" placeholder="" required class="bg-gray-100 px-4 py-2 mt-2 rounded-md w-full">
                        </div>
                    </div>
                    <div>
                        {{-- For name --}}
                        <div class="flex flex-col">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="Product Name" required class="bg-gray-100 px-4 py-2 mt-2 rounded-md w-full">
                        </div>
    
                        {{-- For Status --}}
                        <div class="flex flex-col mt-5">
                            <label for="detail">Status</label>
                            <select name="sex" id="sex" class="form-control px-4 py-2 mt-2 bg-gray-100 rounded-md">
                                @php
                                    $json = '["Active", "Block"]';
                                    $options = json_decode($json);
                                @endphp
                                @foreach ($options as $option)
                                    <option value="{{ $option }}">{{ $option }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                {{-- For Date --}} 
                <div date-rangepicker class="grid grid-cols-3 mt-5">
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                    </div>
                    <span class="mx-4 text-gray-500 place-self-center ">to</span>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                    </div>
                    <div>
                         <button type="submit" name="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg px-5 py-2.5 text-center">Add</button>
                         dd($request->all());
                        </div>
                </div>
            </form>  
        </div>
    </section>
    <script>
        flatpickr('#start, #end', {
            enableTime: false,
            dateFormat: "Y-m-d",
        });
    </script>
    {{-- The following line will output the submitted form data for debugging --}}
    {{-- {{ dd($request->all()) }} --}}
@endsection
