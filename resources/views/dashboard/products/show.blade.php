<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
        <main>
            <div class="container mt-5">
                <div class="card mt-5" onclick="history.back()" style="cursor: pointer;">
                    <div class="card-header">
                        Back
                    </div>
                </div>
        
                <div class="card mb-4 mt-5">
                    <div class="card-header">
                        <h2>Pets</h2>
                    </div>
                    <div class="card-body mt-2">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <h4><strong>Name: </strong>{{ $products->name }}</h4>
                                </div>
                                <div class="form-group">
                                    <h4><strong>Price: </strong>{{ $products->price }}</h4>
                                </div>
                                <div class="form-group">
                                    <h4><strong>Detail: </strong>{{ $products->detail }}</h4>
                                </div>
                                <div class="form-group">
                                    <h4><strong>Size: </strong>{{ $products->size }}</h4>
                                </div>
                                <div class="form-group">
                                    <h4><strong>Category: </strong>{{ $products->category->name }}</h4>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group text-center">
                                    <img style="border-radius: 10px; border: 1px solid black; max-height: 400px;" src="/images/{{ $products->images }}" alt="Pet Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>