@extends('dashboard')

@section('content')
<head>
    <title>Product</title>
</head>
<main>
    <div class="container" style="width: 100%">
        <div class="card mb-4 mt-5">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h2>Product list</h2>
                    </div>
                    <div class="col-md-6">
                        <form class="d-flex" role="search" action="" method="GET" name="search">
                            <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="col">
                        <a class="btn btn-primary float-right" href="{{ url('/dashboard/products/create') }}">Add new Product</a>
                    </div>
                </div>
            </div>

            <table class="table table-striped mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Size</th>
                        <th scope="col">Image</th>
                        <th scope="col">Category</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $item)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->price}}</td>
                        <td>{{ $item->detail}}</td>
                        <td>{{ $item->size}}</td>
                        <td><img src="{{asset('images/' . $item->image)}}" height=50 width="auto" alt="{{ $item->name }}"></td>
                        <td>
                            @if($item->category)
                                {{ $item->category->name }}
                            @else
                                Category not available
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('/dashboard/products/show', $item->id)}}" title="View Item" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                            <a href="{{ url('/dashboard/products/update', $item->id)}}" title="Edit Item" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                            <form method="POST" action="{{ url('/dashboard/products/index/' . $item->id)}}" accept-charset="UTF-8" style="display:inline">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                    <i class="fa fa-trash" class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection
