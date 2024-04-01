@extends('dashboard')

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <a href="javascript:void(0);" onclick="history.back()">Back</a>
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
</div>
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
