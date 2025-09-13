@extends('layouts.admin')
@section('title','Category')
@section('content')

<style>
  /* Card Hover Effect */
  .card-hover {
    transition: all 0.3s ease-in-out;
  }

  .card-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.15);
  }

  /* Table Row Hover */
  .table-hover tbody tr:hover {
    background-color: #f8f9fa !important;
    cursor: pointer;
  }
</style>

<div class="py-3">
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

  <div class="row g-4">
    <!-- Add Category Card (Left Side, Small) -->
    <div class="col-lg-2 col-md-3">
      <div class="card border-0 shadow-sm rounded-3 card-hover h-100">
        <div class="card-header bg-primary text-white">
          <h5 class="mb-0"><i class="fas fa-plus-circle me-2"></i> Add Category</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('admin.products.category.save') }}" method="post">
            @csrf

            <div class="mb-3">
              <label class="form-label fw-semibold">Category Name</label>
              <input type="text" class="form-control rounded-3" name="title" placeholder="e.g. Electronics" value="{{ old('title') }}">
              @error('title') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Slug</label>
              <input type="text" class="form-control rounded-3" name="slug" value="{{ old('slug') }}" placeholder="e.g. electronics">
              @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Description</label>
              <textarea rows="3" class="form-control rounded-3" name="description" placeholder="Short description...">{{ old('description') }}</textarea>
              @error('description') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Status</label>
              <select class="form-select rounded-3" name="status">
                <option value="Active" {{ old('status')=='Active' ? 'selected' : '' }}>Active</option>
                <option value="Inactive" {{ old('status')=='Inactive' ? 'selected' : '' }}>Inactive</option>
              </select>
              @error('status') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="btn btn-success w-100 rounded-3">
              <i class="fas fa-save me-1"></i> Save Category
            </button>
          </form>
        </div>
      </div>
    </div>

    <!-- Categories Table (Right Side, Larger) -->
    <div class="col-lg-10 col-md-10">
      <div class="card border-0 shadow-sm rounded-3 card-hover h-100">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
          <h5 class="mb-0 fw-bold"><i class="fas fa-list me-2"></i> Category List</h5>
        </div>
        <div class="card-body">
          <table class="table table-bordered align-middle table-hover">
            <thead class="table-light">
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Status</th>
                <th>Date of Entry</th>
                <th>Last Updated</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $category)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->title }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ $category->description }}</td>
                <td>
                  <span class="badge {{ $category->status == 'Active' ? 'bg-success' : 'bg-danger' }}">
                    {{ $category->status }}
                  </span>
                </td>
                <td>{{ $category->created_at->format('d M Y') }}</td>
                <td>{{ $category->updated_at->format('d M Y H:i') }}</td>
                <td class="text-center">
                  <a href="{{ route('admin.products.category.delete', $category->id) }}" onclick="return confirm('Are you sure you want to delete this category?')">
                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                  </a>
                  <a href="{{ route('admin.products.editcategory.edit', $category->id) }}">
                    <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection