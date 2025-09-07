@extends('layouts.app')
@section('title','Checkout')
@section('content')

<!-- Hero Section -->
<section class="py-5 text-white bg-danger text-left" style="margin-top: -30px;">
  <div class="container">
    <h1 class="display-4 fw-bold"><i class="fas fa-shopping-cart"></i> Checkout</h1>
    <p class="lead">Complete your order and enjoy fast delivery 🚚</p>
  </div>
</section>

<!-- Checkout Form -->
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-10">

      <div class="card shadow-lg border-0">
        <div class="card-body p-4">

          <form>
            <div class="row g-4">
              
              <!-- Billing Details -->
              <div class="col-md-6">
                <h4 class="text-danger mb-3"><i class="fas fa-user"></i> Billing Details</h4>
                <div class="mb-3 input-group">
                  <span class="input-group-text bg-danger text-white"><i class="fas fa-user"></i></span>
                  <input type="text" id="fullname" class="form-control" placeholder="Full Name">
                </div>
                <div class="mb-3 input-group">
                  <span class="input-group-text bg-danger text-white"><i class="fas fa-envelope"></i></span>
                  <input type="email" id="email" class="form-control" placeholder="Email">
                </div>
                <div class="mb-3 input-group">
                  <span class="input-group-text bg-danger text-white"><i class="fas fa-phone"></i></span>
                  <input type="text" id="phone" class="form-control" placeholder="Phone Number">
                </div>
                <div class="mb-3 input-group">
                  <span class="input-group-text bg-danger text-white"><i class="fas fa-map-marker-alt"></i></span>
                  <input type="text" id="address" class="form-control" placeholder="Address">
                </div>
                <div class="mb-3 input-group">
                  <span class="input-group-text bg-danger text-white"><i class="fas fa-city"></i></span>
                  <input type="text" id="city" class="form-control" placeholder="City">
                </div>
                <div class="mb-3 input-group">
                  <span class="input-group-text bg-danger text-white"><i class="fas fa-mail-bulk"></i></span>
                  <input type="text" id="zip" class="form-control" placeholder="ZIP Code">
                </div>
              </div>

              <!-- Shipping & Payment -->
              <div class="col-md-6">
                <h4 class="text-danger mb-3"><i class="fas fa-truck"></i> Shipping Details</h4>
                <div class="mb-3 input-group">
                  <span class="input-group-text bg-danger text-white"><i class="fas fa-map"></i></span>
                  <input type="text" id="shipping_address" class="form-control" placeholder="Shipping Address">
                </div>
                <div class="mb-3 input-group">
                  <span class="input-group-text bg-danger text-white"><i class="fas fa-shipping-fast"></i></span>
                  <select id="shipping_method" class="form-select">
                    <option>Standard (3-5 days) - Free</option>
                    <option>Express (1-2 days) - $10</option>
                  </select>
                </div>

                <h4 class="text-danger mb-3 mt-4"><i class="fas fa-credit-card"></i> Payment Method</h4>
                <div class="mb-3 input-group">
                  <span class="input-group-text bg-danger text-white"><i class="fas fa-wallet"></i></span>
                  <select class="form-select">
                    <option>Credit Card</option>
                    <option>PayPal</option>
                    <option>Cash on Delivery</option>
                  </select>
                </div>

                <div class="mb-3 input-group">
                  <span class="input-group-text bg-danger text-white"><i class="far fa-credit-card"></i></span>
                  <input type="text" id="card_number" class="form-control" placeholder="Card Number">
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3 input-group">
                    <span class="input-group-text bg-danger text-white"><i class="fas fa-calendar-alt"></i></span>
                    <input type="text" id="expiry" class="form-control" placeholder="MM/YY">
                  </div>
                  <div class="col-md-6 mb-3 input-group">
                    <span class="input-group-text bg-danger text-white"><i class="fas fa-lock"></i></span>
                    <input type="text" id="cvv" class="form-control" placeholder="CVV">
                  </div>
                </div>
              </div>

            </div>

            <!-- Place Order Button -->
            <div class="text-center mt-4">
              <button type="submit" class="btn btn-danger btn-lg px-5">
                <i class="fas fa-check-circle"></i> Place Order
              </button>
            </div>

          </form>

        </div>
      </div>

    </div>
  </div>
</div>

@endsection
