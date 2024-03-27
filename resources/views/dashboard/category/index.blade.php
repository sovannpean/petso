@extends('dashboard')

@section('category')
<main>
    <div class="container" style="width: 100%">
        <div class="card mb-4 mt-5">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h2>Categories list</h2>
                    </div>
                    <div class="col">
                        <a style="float: right;" class="btn btn-primary" href="{{ url('/dashboard/category/create') }}">Add Category</a>
                    </div>
                </div>
            </div>

            <table class="table table-striped mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Type Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td> 
                            <a href="{{ url('/dashboard/category/show/'. $category->id)}}" title="View Item">
                                <button class="btn btn-primary btn-sm"> <i class="fa fa-eye" class="fa fa-pencil-square-o" aria-hidden="true"></i>ViewItem</button>
                            </a>
                            <a href="{{ url('/dashboard/category/update/'. $category->id)}}" title="Edit Item">
                                <button class="btn btn-primary btn-sm"><i class="fa fa-refresh" class="fa fa-pencil-square-o" aria-hidden="true"></i>Update</button>
                            </a>
                            <form method="POST" action="{{ url('/dashboard/category/index/' . $category->id)}}" accept-charset="UTF-8" style="display:inline">
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
