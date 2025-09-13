@extends('layouts.admin')
@section('title','products')
@section('content')

<div class=" py-4">
    {{-- ✅ Flash Messages --}}
    @if ($message = session('success'))
    <div class="alert alert-info alert-dismissible fade show d-flex align-items-center shadow-sm border border-success rounded-3 mb-4" role="alert">
        <i class="fas fa-check-circle me-2 fs-5"></i>
        <span>{{ $message }}</span>
        <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if ($message = session('warning'))
    <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center shadow-sm border border-warning rounded-3 mb-4" role="alert">
        <i class="fas fa-exclamation-triangle me-2 fs-5"></i>
        <span>{{ $message }}</span>
        <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><i class="fas fa-box me-2"></i> Products List</h5>
            <div class="ms-auto"> <!-- 👈 Button ko right end pe le jane ke liye -->
                <a href="{{ route('admin.products.create') }}" class="btn btn-light btn-sm">
                    <i class="fas fa-plus-circle me-1"></i> Add Product
                </a>
            </div>
        </div>


        <div class="card-body table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th><i class="fas fa-image"></i> Image</th>
                        <th><i class="fas fa-tag"></i> Title</th>
                        <th><i class="fas fa-layer-group"></i> Category ID</th>
                        <th><i class="fas fa-dollar-sign"></i> Price</th>
                        <th><i class="fas fa-align-left"></i> Description</th>
                        <th><i class="fas fa-boxes"></i> Stock</th>
                        <th><i class="fas fa-cogs"></i> Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>
                            @if($product->image)
                            <img src="{{ asset('storage/products/'.$product->image) }}" width="60" class="rounded">
                            @else
                            <span class="text-muted">No Image</span>
                            @endif
                        </td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->category_id }}</td>
                        <td>{{ number_format($product->price) }}</td>
                        <td>{{ Str::limit($product->description, 40) }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <!-- ✅ Delete form -->
                            <form action="{{ route('admin.products.delete', $product->id) }}"
                                method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this product?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center text-muted">No products found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection