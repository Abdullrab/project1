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
            <div class="mb-3">
              <label class="form-label fw-semibold">Slug</label>
              <input type="text" class="form-control rounded-3" placeholder="e.g. electronics">
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold">Description</label>
              <textarea rows="3" class="form-control rounded-3" placeholder="Short description..."></textarea>
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold">Status</label>
              <select class="form-select rounded-3">
                <option {{ $category->status == 'Active' ? 'selected' : '' }}>Active</option>
                <option {{ $category->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold">Date of Entry</label>
              <input type="date" class="form-control rounded-3">
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
