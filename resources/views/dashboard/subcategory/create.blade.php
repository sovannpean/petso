@extends('dashboard')

@section('content')
<head>
    <title>Create Subcategory</title>
</head>

<section>
    <div class="grid grid-cols-3 gap-2 mt-10">
        <div class="col-span-3">
            <div class="bg-white border dark:bg-gray-800 sm:rounded-lg">
                <div class="bg-blue-200 py-4 text-center text-xl font-semibold rounded-t-lg">
                    <h1><i class="fa-solid fa-plus pr-2"></i>Create New Subcategory</h1>
                </div>
                <div class="my-5 px-5">
                    @if ($errors->any())
                        <div class="bg-red-500 text-white p-4 rounded-lg mb-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form-group" method="POST" action="{{ url('/dashboard/subcategory/create') }}" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="flex flex-col gap-2">
                            <label for="create-subcategory">subcategory Name</label>
                            <input class="form-control py-2.5 px-2 rounded-lg border" type="text" name="name" id="name" value="{{ old('name') }}" required placeholder="Name of Subcategory">
                        </div>
                        {{-- Category --}}
                    <div class="flex items-center justify-between mt-5 text-gray-200">
                        <div class="flex gap-2 font-medium bg-blue-600 px-5 py-2.5 text-center rounded-lg">
                            <label for="category">Category:</label><br>
                            <select name="category_name" class="form-control hover:cursor-pointer bg-blue-600">
                                @foreach($categories as $category)
                                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <button type="submit" name="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg px-5 py-2.5 text-center">Add</button>
                        </div>
                    </div>
                        <div class="mt-4">
                            <button style="float: right;" class="bg-blue-300 py-2 px-4 rounded-lg hover:bg-blue-400" type="submit" name="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
