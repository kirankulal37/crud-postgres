<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container py-5">

    <div class="card shadow-sm col-md-8 mx-auto">
        <div class="card-header bg-warning text-dark">
            <h3 class="mb-0">Edit Product</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="{{ $product->name }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea
                        name="description"
                        class="form-control"
                        rows="3"
                    >{{ $product->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Price ($)</label>
                    <input
                        type="number"
                        step="0.01"
                        name="price"
                        class="form-control"
                        value="{{ $product->price }}"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-warning">
                    Update Product
                </button>

                <a href="{{ route('products.index') }}" class="btn btn-secondary ms-2">
                    Cancel
                </a>

            </form>

        </div>
    </div>

</div>

</body>
</html>
