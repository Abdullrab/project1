@extends('layouts.app')
@section('title','Cart')
@section('content')
<!-- Hero Section -->
<section class="py-5 text-white mt-n3" style="background-color:#dc3545; margin-top: -30px;">
  <div class="container text-left">
    <h1 class="display-4 fw-bold"><i class="fa fa-shopping-cart"></i> Your Cart</h1>
    <p class="lead">Explore our exclusive collection of stylish products crafted with quality and care.</p>
  </div>
</section>
<div class="container-fluid py-3">
    <!-- Summary Section -->
    <div class="row">
        <div class="col-lg-8">
            <!-- Cart Table -->
            <div class="card">
                <div class="card-header bg-danger text-white">
                    <i class="fa fa-shopping-cart"></i> Your Cart
                </div>
                <div class="table-responsive mb-4">
                    <table class="table table-bordered table-stripped cart-table align-middle">
                        <thead>
                            <tr>
                                <th><i class="fa fa-image"></i> Image</th>
                                <th><i class="fa fa-tag"></i> Product</th>
                                <th><i class="fa fa-sort-numeric-asc"></i> Qty</th>
                                <th><i class="fa fa-dollar"></i> Price</th>
                                <th><i class="fa fa-calculator"></i> Subtotal</th>
                                <th><i class="fa fa-trash"></i> Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="https://picsum.photos/100?random=1" class="rounded-circle" alt="Product"
                                        width="40" height="40"></td>
                                <td>Product 1</td>
                                <td><input type="number" value="1" class="form-control form-control-sm"
                                        style="width: 70px; margin: auto;"></td>
                                <td>$49.99</td>
                                <td>$49.99</td>
                                <td><button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="https://picsum.photos/100?random=1" class="rounded-circle" alt="Product"
                                        width="40" height="40"></td>
                                <td>Product 2</td>
                                <td><input type="number" value="2" class="form-control form-control-sm"
                                        style="width: 70px; margin: auto;"></td>
                                <td>$29.99</td>
                                <td>$59.98</td>
                                <td><button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-danger">
                <div class="card-body">
                    <h5 class="card-title text-danger">Cart Summary</h5>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Subtotal</span>
                            <strong>$109.97</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Shipping</span>
                            <span>$5.00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <strong>Total</strong>
                            <strong>$114.97</strong>
                        </li>
                    </ul>
                    <a href="{{ route('checkout') }}" class="btn btn-danger w-100"><i class="fa fa-credit-card"></i>
                        Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection