<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<!-- home page css -->
    <style>
    /* Extra Styling */
    .product-card {
      transition: all 0.3s ease;
    }
    .product-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }
  </style>

  <!-- end home page css -->

  <!-- product page css -->

<style>
  .card {
    transition: transform 0.3s, box-shadow 0.3s;
  }
  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(220, 53, 69, 0.3);
  }
</style>


  <!-- end product page css -->


</head>

<body>
    <div id="app">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-dark bg-danger shadow-sm py-2">
                <div class="container">
                    <!-- Left side: Logo + Project Name -->
                    <a class="navbar-brand d-flex align-items-center" href="{{ url('/login') }}">
                        <i class="fas fa-gem me-2"></i> <!-- Logo icon -->
                        Project 1
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <!-- Left side: Menu (only when logged in) -->
                        @auth
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('/home') }}"><i class="fas fa-home me-1"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('/about') }}"><i class="fas fa-circle-info me-1"></i> About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('/contact') }}"><i class="fas fa-envelope me-1"></i> Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('/products') }}"><i class="fas fa-box-open me-1"></i> Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-light text-danger position-relative ms-2" href="{{ url('/cart') }}">
                                    <i class="fas fa-shopping-cart"></i> Cart
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-info">
                                        0
                                    </span>
                                </a>
                            </li>
                        </ul>
                        @endauth

                        <!-- Right side: Auth Links -->
                        <ul class="navbar-nav ms-auto">
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">
                                    <i class="fas fa-sign-in-alt me-1"></i> Login
                                </a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('register') }}">
                                    <i class="fas fa-user-plus me-1"></i> Register
                                </a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user-circle me-1"></i> {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt me-1"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
</body>