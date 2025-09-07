<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\pagescontroller;
use App\Http\Controllers\admincontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* controllers for front end*/


Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/products', function () {
    return view('products');
})->name('products');

// // single product
// Route::get('/product', function () {
//     return view('product');
// })->name('product');

/// single product with id///

Route::get('/product/{id}', function ($id) {
    return view('product', compact('id'));  // Passing product id to blade
})->name('product');




Route::get('/cart', function () {
    return view('cart');
})->name('cart');

// Checkout page route
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\pagescontroller::class, 'home'])->name('home');

/* controllers for admin */

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [admincontroller::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');

    // products routes //

    Route::get('/products', [AdminController::class, 'products'])->name('admin.products');
    Route::get('/products/create', [AdminController::class, 'create'])->name('admin.products.create');

    Route::prefix('category')->group(function () {
        Route::get('/products/category', [AdminController::class, 'category'])->name('admin.products.category');
        Route::post('/products/save', [AdminController::class, 'category_save'])->name('admin.products.category.save');
        Route::get('products/{id}', [AdminController::class, 'category_delete'])->name('admin.products.category.delete');
    });
});
