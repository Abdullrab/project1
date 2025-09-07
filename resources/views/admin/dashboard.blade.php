@extends('layouts.admin')
@section('title','dashboard')
@section('content')

<div class=" py-4">
    <div class="row g-4">

        <!-- Orders Card -->
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow-lg rounded-4 text-white dashboard-card bg-gradient-primary h-100">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center">
                        <i class="bi bi-bag-fill fs-1"></i>
                        <h3 class="fw-bold mb-0">1,245</h3>
                    </div>
                    <h6 class="mt-3 fw-semibold">Total Orders</h6>
                </div>
            </div>
        </div>

        <!-- Products Card -->
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow-lg rounded-4 text-white dashboard-card bg-gradient-success h-100">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center">
                        <i class="bi bi-box-seam fs-1"></i>
                        <h3 class="fw-bold mb-0">320</h3>
                    </div>
                    <h6 class="mt-3 fw-semibold">Products</h6>
                </div>
            </div>
        </div>

        <!-- Users Card -->
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow-lg rounded-4 text-white dashboard-card bg-gradient-warning h-100">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center">
                        <i class="bi bi-people-fill fs-1"></i>
                        <h3 class="fw-bold mb-0">540</h3>
                    </div>
                    <h6 class="mt-3 fw-semibold">Users</h6>
                </div>
            </div>
        </div>

        <!-- Revenue Card -->
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow-lg rounded-4 text-white dashboard-card bg-gradient-danger h-100">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center">
                        <i class="bi bi-cash-coin fs-1"></i>
                        <h3 class="fw-bold mb-0">$12,450</h3>
                    </div>
                    <h6 class="mt-3 fw-semibold">Revenue</h6>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    /* Gradient background helpers */
    .bg-gradient-primary {
        background: linear-gradient(135deg, #4e73df, #224abe);
    }

    .bg-gradient-success {
        background: linear-gradient(135deg, #1cc88a, #0d9d66);
    }

    .bg-gradient-warning {
        background: linear-gradient(135deg, #f6c23e, #d4a100);
    }

    .bg-gradient-danger {
        background: linear-gradient(135deg, #e74a3b, #be2617);
    }

    /* Card hover effect */
    .dashboard-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .dashboard-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
    }
</style>
@endsection