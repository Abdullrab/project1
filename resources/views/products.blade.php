@extends('layouts.app')
@section('title','products')
@section('content')
<!-- Hero Section -->
<section class="py-5 text-white mt-n3" style="background-color:#dc3545; margin-top: -30px;">
  <div class="container text-left">
    <h1 class="display-4 fw-bold"><i class="fa fa-shopping-bag"></i> Our Products</h1>
    <p class="lead">Explore our exclusive collection of stylish products crafted with quality and care.</p>
  </div>
</section>

<!-- Products Section -->
<div class="container py-5">
  <div class="row g-4">
    <!-- Product 1 -->
    <div class="col-md-4 col-lg-4">
      <div class="card product-card h-100 shadow-sm border-danger">
        <img src="https://picsum.photos/400/250?random=1" class="card-img-top" alt="Product 1">
        <div class="card-body text-center">
          <h5 class="card-title text-danger"><i class="fa fa-gem"></i> Elegant Bag</h5>
          <p class="card-text">Premium leather handbag with stylish finish.</p>
          <a href="{{ route('product', ['id' => 1]) }}" class="btn btn-danger"><i class="fa fa-cart-plus"></i> Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-md-4 col-lg-4">
      <div class="card product-card h-100 shadow-sm border-danger">
        <img src="https://picsum.photos/400/250?random=2" class="card-img-top" alt="Product 2">
        <div class="card-body text-center">
          <h5 class="card-title text-danger"><i class="fa fa-shoe-prints"></i> Stylish Shoes</h5>
          <p class="card-text">Comfortable sneakers with modern design.</p>
          <a href="{{ route('product', ['id' => 2]) }}" class="btn btn-danger"><i class="fa fa-cart-plus"></i> Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-4 col-lg-4">
      <div class="card product-card h-100 shadow-sm border-danger">
        <img src="https://picsum.photos/400/250?random=3" class="card-img-top" alt="Product 3">
        <div class="card-body text-center">
          <h5 class="card-title text-danger"><i class="fa fa-watch"></i> Luxury Watch</h5>
          <p class="card-text">Elegant wristwatch for formal and casual wear.</p>
          <a href="{{ route('product', ['id' => 3]) }}" class="btn btn-danger"><i class="fa fa-cart-plus"></i> Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Product 4 -->
    <div class="col-md-4 col-lg-4">
      <div class="card product-card h-100 shadow-sm border-danger">
        <img src="https://picsum.photos/400/250?random=4" class="card-img-top" alt="Product 4">
        <div class="card-body text-center">
          <h5 class="card-title text-danger"><i class="fa fa-laptop"></i> Laptop</h5>
          <p class="card-text">High-performance laptop for work and play.</p>
          <a href="{{ route('product', ['id' => 4]) }}" class="btn btn-danger"><i class="fa fa-cart-plus"></i> Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Product 5 -->
    <div class="col-md-4 col-lg-4">
      <div class="card product-card h-100 shadow-sm border-danger">
        <img src="https://picsum.photos/400/250?random=5" class="card-img-top" alt="Product 5">
        <div class="card-body text-center">
          <h5 class="card-title text-danger"><i class="fa fa-tshirt"></i> Casual T-Shirt</h5>
          <p class="card-text">Soft cotton T-shirt with trendy design.</p>
          <a href="{{ route('product', ['id' => 5]) }}" class="btn btn-danger"><i class="fa fa-cart-plus"></i> Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Product 6 -->
    <div class="col-md-4 col-lg-4">
      <div class="card product-card h-100 shadow-sm border-danger">
        <img src="https://picsum.photos/400/250?random=6" class="card-img-top" alt="Product 6">
        <div class="card-body text-center">
          <h5 class="card-title text-danger"><i class="fa fa-mobile"></i> Smartphone</h5>
          <p class="card-text">Latest smartphone with powerful features.</p>
          <a href="{{ route('product', ['id' => 6]) }}" class="btn btn-danger"><i class="fa fa-cart-plus"></i> Add to Cart</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <a href="{{ route('checkout') }}" class="btn btn-danger w-100"><i class="fa fa-credit-card"></i>
                        Proceed to Checkout</a> -->

<!-- Custom CSS for hover effect -->
<style>
  .product-card {
    transition: transform 0.3s, box-shadow 0.3s;
    border-radius: 15px;
  }

  .product-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 25px rgba(220, 53, 69, 0.4);
  }

  .card-title {
    font-weight: bold;
  }
</style>

@endsection