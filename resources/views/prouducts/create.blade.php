<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Product
                            <a href="{{ route('products.index') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('prouducts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" rows="3" required>{{ old('description') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="price">Price</label>
                                <input type="number" name="price" class="form-control" value="{{ old('price') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="quantity">Quantity</label>
                                <input type="number" name="quantity" class="form-control" value="{{ old('quantity') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>