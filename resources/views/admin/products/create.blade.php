
// add category page//




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
                    <form action="{{ route('admin.products.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Product Name -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-tag me-1"></i> Product Name</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Enter product name">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Category -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-layer-group me-1"></i> Category</label>
                            <select name="category" class="form-select">
                                <option value="">-- Select Category --</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>
                                        {{ $category->title }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Price -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-dollar-sign me-1"></i> Price</label>
                            <input type="number" step="0.01" name="price" value="{{ old('price') }}" class="form-control" placeholder="Enter price">
                            @error('price')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Quantity -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-boxes me-1"></i> Quantity</label>
                            <input type="number" name="quantity" value="{{ old('quantity') }}" class="form-control" placeholder="Enter stock quantity">
                            @error('quantity')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Image -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-image me-1"></i> Product Image</label>
                            <input type="file" name="image" class="form-control">
                            @error('image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-align-left me-1"></i> Description</label>
                            <textarea name="description" rows="4" class="form-control" placeholder="Enter product description">{{ old('description') }}</textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
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
