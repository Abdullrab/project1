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
    /* Light gray */
    cursor: pointer;
  }
</style>

<div class=" py-3">
  <div class="row g-4">

    {{-- ✅ Success Message --}}
    @if ($message = session('success'))
    <div class="alert alert-info alert-dismissible fade show d-flex align-items-center shadow-sm border border-success rounded-3 mb-4" role="alert">
      <i class="fas fa-check-circle me-2 fs-5"></i>
      <span>{{ $message }}</span>
      <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    {{-- ⚠️ Warning Message --}}
    @if ($message = session('warning'))
    <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center shadow-sm border border-warning rounded-3 mb-4" role="alert">
      <i class="fas fa-exclamation-triangle me-2 fs-5"></i>
      <span>{{ $message }}</span>
      <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"></button>
    </div>
    @endif


    <!-- Add Category Card -->
    <div class="col-lg-4">


      <div class="card border-5 shadow-sm rounded-3 card-hover">
        <div class="card-header bg-primary text-white">
          <h5 class="mb-0"><i class="fas fa-plus-circle me-2"></i> Add Category</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('admin.products.category.save') }}" method="post">
            @csrf
            <div class="mb-3">
              <label class="form-label fw-semibold">Category Name</label>
              <input type="text" class="form-control rounded-3" id="title" name="title" placeholder="e.g. Electronics">
              @error('title')
              <font color="info">{{$message}}</font>

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
                <option>Active</option>
                <option>Inactive</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold">Date of Entry</label>
              <input type="date" class="form-control rounded-3">
            </div>
            <button type="submit" class="btn btn-success w-100 rounded-3">
              <i class="fas fa-save me-1"></i> Save Category
            </button>
          </form>
        </div>
      </div>
    </div>

    <!-- Categories Table -->
    <div class="col-lg-8">
      <div class="card border-5 shadow-sm rounded-3 card-hover">
        <div class="card-header bg-primary text-white">
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
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- Static Example Rows -->
              @foreach($categories as $category)
              <tr>
                <td>{{ $loop->iteration }}</td> {{-- Serial number --}}
                <td>{{$category->title}}</td>
                <td>electronics</td>
                <td>All kinds of electronic gadgets</td>
                <td><span class="badge bg-success">Active</span></td>
                <td>28 Aug 2025</td>
                <td>
                  <a href="{{ route('admin.products.category.delete', $category->id) }}"
                    onclick="return confirm('Are you sure you want to delete this category?')">
                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                  </a>
                  <a href="{{ route('admin.products.editcategory.edit', $category->id) }}"
                    onclick="return confirm('Are you sure you want to Update this category?')">
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