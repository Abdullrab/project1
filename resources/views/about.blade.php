@extends('layouts.app')
@section('title','About Us')

@section('content')

<!-- Hero Section -->
<section class="py-5 text-white hero-section " style="margin-top:-30px;">
    <div class="container text-left">
        <h1 class="display-4 fw-bold">
            <i class="fas fa-building me-2"></i> About Us
        </h1>
        <p class="lead">Passionate about delivering quality and innovation with every product.</p>
    </div>
</section>

<!-- About Company Section -->
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-4">
            <img src="https://picsum.photos/600/300?random=1" class="img-fluid rounded shadow" alt="About Image">
        </div>
        <div class="col-lg-6">
            <h2 class="text-danger mb-3"><i class="fas fa-heart me-2"></i> Who We Are</h2>
            <p>
                We are a dedicated team focused on creating products that bring value to our customers.
                Our journey started with a simple mission: to combine <strong>quality, affordability, and trust</strong>.
            </p>
            <p>
                Over the years, we’ve grown into a brand that people rely on, offering everything from innovative
                solutions to exceptional customer support. Your satisfaction is our success.
            </p>
        </div>
    </div>
</div>

<!-- Mission & Vision Section -->
<div class="container py-5">
    <div class="row text-center">
        <div class="col-md-6 mb-4">
            <div class="custom-card h-100">
                <i class="fas fa-bullseye fa-3x text-danger mb-3"></i>
                <h3 class="text-danger">Our Mission</h3>
                <p>
                    To deliver high-quality products and services that make everyday life easier,
                    more enjoyable, and more affordable for our customers.
                </p>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="custom-card h-100">
                <i class="fas fa-eye fa-3x text-danger mb-3"></i>
                <h3 class="text-danger">Our Vision</h3>
                <p>
                    To become a globally recognized brand known for <strong>innovation, trust, and excellence</strong>,
                    always keeping customers at the heart of everything we do.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="container py-5">
    <h2 class="text-center text-danger mb-5"><i class="fas fa-users me-2"></i> Meet Our Team</h2>
    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="card custom-team h-100">
                <img src="https://picsum.photos/400/250?random=1" class="card-img-top rounded-circle p-3" alt="Team Member">
                <div class="card-body">
                    <h5 class="card-title text-danger">John Doe</h5>
                    <p class="card-text">Founder & CEO</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card custom-team h-100">
                <img src="https://picsum.photos/400/250?random=1" class="card-img-top rounded-circle p-3" alt="Team Member">
                <div class="card-body">
                    <h5 class="card-title text-danger">Jane Smith</h5>
                    <p class="card-text">Marketing Head</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card custom-team h-100">
                <img src="https://picsum.photos/400/250?random=1" class="card-img-top rounded-circle p-3" alt="Team Member">
                <div class="card-body">
                    <h5 class="card-title text-danger">Ali Khan</h5>
                    <p class="card-text">Product Manager</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<section class="py-5 text-white text-center hero-section">
    <div class="container">
        <h2 class="mb-3"><i class="fas fa-phone-alt me-2"></i> Want to Work With Us?</h2>
        <p class="lead">Get in touch today and let’s build something amazing together.</p>
        <a href="{{ url('/contact') }}" class="btn btn-light btn-lg">
            <i class="fas fa-envelope me-2"></i> Contact Us
        </a>
    </div>
    <style>
        /* css for about page */

        /* Hero Section */
        .hero-section {
            background-color: #dc3545;
            margin-top: -10px;
        }

        /* Custom Card Styling */
        .custom-card {
            border: 2px solid #dc3545;
            border-radius: 12px;
            padding: 20px;
            background-color: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .custom-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 6px 20px rgba(220, 53, 69, 0.4);
        }

        /* Team Cards */
        .custom-team {
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .custom-team:hover {
            transform: translateY(-5px);
            box-shadow: 0px 6px 20px rgba(220, 53, 69, 0.4);
        }
    </style>
</section>
@endsection