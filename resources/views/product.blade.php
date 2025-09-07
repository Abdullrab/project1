@extends('layouts.app')
@section('title','Product Detail')

@section('content')
<!-- Hero Section -->
<section class="py-5 text-white mt-n3" style="background-color:#dc3545; margin-top:-30px;">
  <div class="container">
    <h1 class="display-5 fw-bold"><i class="fa fa-box-open"></i> Product Detail</h1>
    <p class="lead">Discover premium quality and unique style.</p>
  </div>
</section>

<!-- Product Detail Section -->
<div class="container py-5">
  <div class="row g-4">
    <!-- Product Image Gallery -->
    <div class="col-lg-6">
      <div class="card shadow-lg border-danger">
        <img src="https://picsum.photos/700/500?random=22" class="card-img-top rounded-3" alt="Product Image">
      </div>
      <div class="d-flex justify-content-center gap-3 mt-3">
        <img src="https://picsum.photos/120/100?random=1" class="img-thumbnail border-danger" alt="Thumb 1">
        <img src="https://picsum.photos/120/100?random=2" class="img-thumbnail border-danger" alt="Thumb 2">
        <img src="https://picsum.photos/120/100?random=3" class="img-thumbnail border-danger" alt="Thumb 3">
      </div>
    </div>

    <!-- Product Info -->
    <div class="col-lg-6">
      <div class="card shadow-lg border-danger p-4 h-100">
        <h2 class="text-danger fw-bold mb-3"><i class="fa fa-gem"></i> Elegant Leather Handbag</h2>
        <p class="text-muted">SKU: BAG-12345</p>

        <h4 class="text-dark fw-bold mb-3">Price: <span class="text-danger">$120</span></h4>

        <p>
          This luxurious leather handbag is crafted from premium materials. With its sleek design and spacious compartments, it’s perfect for everyday use as well as special occasions.
        </p>

        <!-- Features -->
        <ul class="list-unstyled mt-3">
          <li><i class="fa fa-check-circle text-danger"></i> 100% Genuine Leather</li>
          <li><i class="fa fa-check-circle text-danger"></i> Adjustable Strap</li>
          <li><i class="fa fa-check-circle text-danger"></i> 2-Year Warranty</li>
          <li><i class="fa fa-check-circle text-danger"></i> Free Shipping</li>
        </ul>

        <!-- Quantity Selector -->
        <div class="mt-3">
          <label for="quantity" class="form-label fw-bold">Quantity:</label>
          <input type="number" id="quantity" class="form-control w-25 border-danger" value="1" min="1">
        </div>

        <!-- Action Buttons -->
        <div class="mt-4 d-flex gap-2">
          <a href="{{ route('cart') }}" class="btn btn-danger flex-fill">
            <i class="fa fa-cart-plus"></i> Add to Cart
          </a>
          <a href="{{ route('checkout') }}" class="btn btn-outline-danger flex-fill">
            <i class="fa fa-credit-card"></i> Buy Now
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Product Description & Reviews -->
  <div class="row mt-5">
    <div class="col-lg-12">
      <div class="card shadow-lg border-danger p-4">
        <h3 class="text-danger"><i class="fa fa-info-circle"></i> Product Description</h3>
        <p>
          The Elegant Leather Handbag blends modern fashion with timeless elegance. Designed to be lightweight yet durable, it offers comfort and convenience. 
          Multiple compartments allow you to keep your essentials organized, while the premium leather finish ensures long-lasting use.
        </p>

        <h3 class="text-danger mt-4"><i class="fa fa-star"></i> Customer Reviews</h3>
        <div class="mt-3">
          <p><strong><i class="fa fa-user text-danger"></i> Sarah J.</strong> - “Absolutely love this bag! Looks premium and feels very sturdy.” ⭐⭐⭐⭐⭐</p>
          <p><strong><i class="fa fa-user text-danger"></i> Emma W.</strong> - “Worth every penny. Elegant and practical at the same time.” ⭐⭐⭐⭐☆</p>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
