<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use  App\models\category;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Fetch all products
    public function products()
    {
        $products = Product::all(); // get all products
        return view('admin.products.products', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function orders()
    {
        return view('admin.orders');
    }

    public function settings()
    {
        return view('admin.settings');
    }
    // categories section //
    public function category()
    {
        $categories = category::orderby('id', 'desc')->get();
        return view('admin.products.category', compact('categories'));
    }
    // save data//
    public function category_save(request $request)
    {
        $validated = $request->validate([
            'title' => 'required | min:8'
        ]);
        $category = new category;
        $category->title = $request->title;
        $category->save();
        return redirect()->back()->with('success', 'Category Added Successfully');
    }

    //delete//
    public function category_delete($id)
    {
        $category = Category::findOrFail($id); // find category or throw 404
        $category->delete();

        return redirect()->back()->with('warning', 'Category Deleted Successfully');
    }
}
