@extends('layouts.admin')
@section('title','create')
@section('content')
<div class="py-4">
    <div class="row justify-content-left">
        <div class="col-lg-12">

            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><i class="fas fa-plus-circle me-2"></i> Create New Product</h5>
                </div>

                <div class="card-body">
                    {{-- Form for creating a product --}}
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Product Name -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-tag me-1"></i> Product Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter product name">
                        </div>

                        <!-- Category -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-layer-group me-1"></i> Category</label>
                            <select name="category" class="form-select">
                                <option value="">-- Select Category --</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Clothing">Clothing</option>
                                <option value="Accessories">Accessories</option>
                                <option value="Books">Books</option>
                            </select>
                        </div>

                        <!-- Price -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-dollar-sign me-1"></i> Price</label>
                            <input type="number" name="price" class="form-control" placeholder="Enter price">
                        </div>

                        <!-- Quantity -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-boxes me-1"></i> Quantity</label>
                            <input type="number" name="quantity" class="form-control" placeholder="Enter stock quantity">
                        </div>

                        <!-- Image -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-image me-1"></i> Product Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-align-left me-1"></i> Description</label>
                            <textarea name="description" rows="4" class="form-control" placeholder="Enter product description"></textarea>
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-between py-2">
                            <a href="{{ route('admin.products') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-1"></i> Back
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save me-1"></i> Save Product
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection