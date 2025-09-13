@extends('layouts.app')
@section('title','Products')
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
    @forelse($products as $product)
    <div class="col-md-4 col-lg-4">
      <div class="card product-card h-100 shadow-sm border-danger">
        <img src="{{ $product->image ? asset('storage/products/'.$product->image) : 'https://picsum.photos/400/250?random='.$product->id }}"
          class="card-img-top"
          alt="{{ $product->name }}">
        <div class="card-body text-center">
          <h5 class="card-title text-danger">{{ $product->name }}</h5>
          <p class="card-text">{{ $product->description }}</p>
          <a href="{{ route('product', ['id' => $product->id]) }}" class="btn btn-danger">
            <i class="fa fa-cart-plus"></i> Add to Cart
          </a>
          <a href="{{ route('product', ['id' => $product->id]) }}" class="btn btn-primary">
            <i class="fa fa-eye"></i> View
          </a>

        </div>
      </div>
    </div>
    @empty
    <div class="col-12 text-center">
      <p class="text-muted">No products available right now.</p>
    </div>
    @endforelse
  </div>
</div>

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