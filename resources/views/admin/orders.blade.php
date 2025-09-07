@extends('layouts.admin')
@section('title','orders')
@section('content')

<div class="py-4">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-primary text-white rounded-top-4">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0"><i class="bi bi-bag-check me-2"></i> Orders List</h5>
                <a href="#" class="btn btn-light btn-sm">
                    <i class="bi bi-plus-circle"></i> New Order
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Customer</th>
                            <th>Product</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Order Row 1 -->
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>Smartphone</td>
                            <td>2025-08-20</td>
                            <td>$499</td>
                            <td><span class="badge bg-success">Completed</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        <!-- Order Row 2 -->
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>Laptop</td>
                            <td>2025-08-21</td>
                            <td>$1,099</td>
                            <td><span class="badge bg-warning text-dark">Pending</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        <!-- Order Row 3 -->
                        <tr>
                            <td>3</td>
                            <td>Mike Johnson</td>
                            <td>Headphones</td>
                            <td>2025-08-22</td>
                            <td>$199</td>
                            <td><span class="badge bg-danger">Cancelled</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        <!-- Order Row 4 -->
                        <tr>
                            <td>4</td>
                            <td>Emily Davis</td>
                            <td>Smartwatch</td>
                            <td>2025-08-23</td>
                            <td>$299</td>
                            <td><span class="badge bg-info text-dark">New</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
