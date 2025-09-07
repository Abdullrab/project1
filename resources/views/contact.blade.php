@extends('layouts.app')
@section('title','Contact')
@section('content')

<!-- Hero Section -->
<section class="py-5 text-white bg-danger" style="margin-top:-30px; ">
    <div class="container text-left">
        <h1 class="display-4 fw-bold"><i class="fa fa-handshake"></i> Contact Us</h1>
        <p class="lead">We’d love to hear from you. Please fill out the form below.</p>
    </div>
</section>

<!-- Contact Form Section -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <!-- Success Message -->
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <!-- Error Messages -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="card shadow-lg border-0 rounded-4 bg-info">
                <div class="card-body p-5">
                    <h4 class="text-danger mb-4"><i class="fa fa-envelope"></i> Send Us a Message</h4>
                    <form action="{{ route('contact') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" name="name" id="name"
                                    class="form-control border-danger"
                                    placeholder="Enter your name" value="{{ old('name') }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" name="email" id="email"
                                    class="form-control border-danger"
                                    placeholder="Enter your email" value="{{ old('email') }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" name="phone" id="phone"
                                    class="form-control border-danger"
                                    placeholder="+92 300 1234567" value="{{ old('phone') }}">
                            </div>
                            <div class="col-md-6">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" name="subject" id="subject"
                                    class="form-control border-danger"
                                    placeholder="Enter subject" value="{{ old('subject') }}" required>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Your Message</label>
                                <textarea name="message" id="message" rows="5"
                                    class="form-control border-danger"
                                    placeholder="Write your message here..." required>{{ old('message') }}</textarea>
                            </div>
                        </div>
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-danger btn-lg shadow-sm">
                                <i class="fa fa-paper-plane"></i> Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom CSS -->
<style>
    .form-control:focus {
        border-color: #dc3545;
        box-shadow: 0 0 5px rgba(220, 53, 69, 0.5);
    }

    .btn-danger:hover {
        background-color: #bb2d3b;
        border-color: #b02a37;
        transform: translateY(-2px);
        transition: all 0.3s ease;
    }
</style>

@endsection