@extends('layouts.app')
@section('title','home')
@section('content')

<!-- Showcase Section with Full Background Image -->
<section class="d-flex align-items-center justify-content-center text-center text-white "
  style="background: url('https://picsum.photos/300/250?random=1') center/cover no-repeat; height: 80vh; margin-top: -30px;">
  <div class="container">
    <h1 class="display-3 fw-bold shadow-lg">✨ Your Dream Shop Awaits ✨</h1>
  </div>
</section>

<!-- Categories Section -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-4"><i class="fas fa-th-large text-danger"></i> Shop by Category</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card text-center shadow-sm p-4">
          <i class="fas fa-tshirt fa-3x text-danger mb-3"></i>
          <h5>Clothing</h5>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center shadow-sm p-4">
          <i class="fas fa-laptop fa-3x text-danger mb-3"></i>
          <h5>Electronics</h5>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center shadow-sm p-4">
          <i class="fas fa-couch fa-3x text-danger mb-3"></i>
          <h5>Furniture</h5>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Featured Products -->
<section id="products" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4"><i class="fas fa-star text-danger"></i> Featured Products</h2>
    <div class="row g-4">
      @for($i=1; $i<=6; $i++)
        <div class="col-md-4">
        <div class="card product-card border border-danger">
          <img src="https://picsum.photos/400x250" class="card-img-top" alt="Product {{ $i }}">
          <div class="card-body text-center">
            <h5 class="card-title">Product {{ $i }}</h5>
            <p class="card-text">$ {{ $i*10 }}.00</p>
            <a href="#" class="btn btn-danger"><i class="fas fa-cart-plus"></i> Add to Cart</a>
          </div>
        </div>
    </div>
    @endfor
  </div>
  </div>
</section>

<!-- Newsletter CTA -->
<section class="py-5 text-white" style="background-color:#dc3545;">
  <div class="container text-center">
    <h2><i class="fas fa-envelope"></i> Stay Updated</h2>
    <p class="mb-4">Subscribe to our newsletter and never miss an update.</p>
    <form class="row g-2 justify-content-center">
      <div class="col-md-6">
        <input type="email" class="form-control" placeholder="Enter your email">
      </div>
      <div class="col-md-2">
        <button class="btn btn-light w-100">Subscribe</button>
      </div>
    </form>
  </div>
</section>

@endsection