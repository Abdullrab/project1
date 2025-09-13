<?php

namespace App\Http\Controllers;

use App\Models\Product; // add this at the very top of your controller

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

    // public function products()
    // {
    //     return view('products'); // products listing
    // }

    public function products()
    {
        $products = Product::all();   // fetch products from DB
        return view('products', compact('products')); // pass to view
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
