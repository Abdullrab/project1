@extends('layouts.admin')
@section('title','editcategory')
@section('content')

<div class="container py-5">
  <div class="row justify-content-center"> <!-- ✅ Center the card -->

    <!-- Edit Category Card -->
    <div class="col-lg-4">

      <div class="card border-5 shadow-sm rounded-3 card-hover">
        <div class="card-header bg-primary text-white">
          <h5 class="mb-0"><i class="fas fa-edit me-2"></i> Edit Category</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('admin.products.editcategory.update', $category->id) }}" method="POST">
            @csrf

            <!-- Category Name -->
            <div class="mb-3">
              <label class="form-label fw-semibold">Category Name</label>
              <input type="text"
                class="form-control rounded-3"
                id="title"
                name="title"
                placeholder="e.g. Electronics"
                value="{{ $category->title }}">
              @error('title')
              <font color="info">{{ $message }}</font>
              @enderror
            </div>

            <!-- Slug -->
            <div class="mb-3">
              <label class="form-label fw-semibold">Slug</label>
              <input type="text" class="form-control rounded-3" name="slug" placeholder="e.g. electronics"
                value="{{ $category->slug }}">
              @error('slug')
              <font color="info">{{ $message }}</font>
              @enderror
            </div>

            <!-- Description -->
            <div class="mb-3">
              <label class="form-label fw-semibold">Description</label>
              <textarea rows="3" class="form-control rounded-3" name="description" placeholder="Short description...">{{ $category->description }}</textarea>
              @error('description')
              <font color="info">{{ $message }}</font>
              @enderror
            </div>

            <!-- Status -->
            <div class="mb-3">
              <label class="form-label fw-semibold">Status</label>
              <select class="form-select rounded-3" name="status">
                <option value="Active" {{ $category->status == 'Active' ? 'selected' : '' }}>Active</option>
                <option value="Inactive" {{ $category->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
              </select>
            </div>

            <button type="submit" class="btn btn-warning w-100 rounded-3">
              <i class="fas fa-save me-1"></i> Update Category
            </button>
          </form>

        </div>
      </div>
    </div>

  </div>
</div>

@endsection