<!DOCTYPE html>
<html>
<head>
    <title>Products</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold">Lists of Productss</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary btn-lg">
            + Add New Product
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0">

            <table class="table table-hover mb-0">
                <h1>WELCOME TO THE PRODUCT SECTIONS</h1>
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price ($)</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td class="fw-semibold">{{ $product->name }}</td>
                        <td class="text-success fw-bold">${{ $product->price }}</td>

                        <td class="text-center">

                            <a href="{{ route('products.edit', $product->id) }}"
                               class="btn btn-warning btn-sm me-2">
                                Edit
                            </a>

                            <form action="{{ route('products.destroy', $product->id) }}"
                                  method="POST"
                                  style="display:inline-block;">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this product?');">
                                    Delete
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>

</div>

</body>
</html>
