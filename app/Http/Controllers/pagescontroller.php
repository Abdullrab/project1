<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // if you want all pages to require login
    }

    // Home page
    public function home()
    {
        return view('home');
    }

    // About page
    public function about()
    {
        return view('about');
    }

    // Contact page
    public function contact()
    {
        return view('contact');
    }

    // All Products page
    public function products()
    {
        return view('products'); // products listing
    }

    // Single Product page
    public function product()
    {
        return view('product'); // single product details
    }

    // Checkout page
    public function checkout()
    {
        return view('checkout');
    }
}
