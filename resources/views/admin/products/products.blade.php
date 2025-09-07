@extends('layouts.admin')
@section('title','products')
@section('content')

<div class=" py-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><i class="fas fa-box me-2"></i> Products List</h5>
            <a href="{{ route('admin.products.create') }}" class="btn btn-light btn-sm">
                <i class="fas fa-plus-circle me-1"></i> Add Product
            </a>
        </div>

        <div class="card-body table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th><i class="fas fa-image"></i> Image</th>
                        <th><i class="fas fa-tag"></i> Name</th>
                        <th><i class="fas fa-layer-group"></i> Category</th>
                        <th><i class="fas fa-dollar-sign"></i> Price</th>
                        <th><i class="fas fa-align-left"></i> Description</th>
                        <th><i class="fas fa-boxes"></i> Stock</th>
                        <th><i class="fas fa-cogs"></i> Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Sample Static Data (replace with @foreach from DB) --}}
                    <tr>
                        <td>1</td>
                        <td><img src="https://picsum.photos/60/60?random=1" class="rounded"></td>
                        <td>Smartphone</td>
                        <td>Electronics</td>
                        <td>$499.00</td>
                        <td>Latest 5G smartphone with amazing features.</td>
                        <td>25</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i></a>
                            <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img src="https://picsum.photos/60/60?random=2" class="rounded"></td>
                        <td>Laptop</td>
                        <td>Computers</td>
                        <td>$899.00</td>
                        <td>Powerful laptop for work and gaming.</td>
                        <td>15</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i></a>
                            <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><img src="https://picsum.photos/60/60?random=3" class="rounded"></td>
                        <td>Headphones</td>
                        <td>Accessories</td>
                        <td>$59.00</td>
                        <td>Noise-cancelling over-ear headphones.</td>
                        <td>50</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i></a>
                            <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><img src="https://picsum.photos/60/60?random=4" class="rounded"></td>
                        <td>Smartwatch</td>
                        <td>Wearables</td>
                        <td>$199.00</td>
                        <td>Track fitness, health, and notifications.</td>
                        <td>30</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i></a>
                            <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><img src="https://picsum.photos/60/60?random=5" class="rounded"></td>
                        <td>Camera</td>
                        <td>Photography</td>
                        <td>$699.00</td>
                        <td>Professional DSLR camera with 4K video.</td>
                        <td>10</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i></a>
                            <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection