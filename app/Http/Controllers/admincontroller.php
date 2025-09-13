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
        $categories = category::all();
        return view('admin.products.create', compact('categories'));
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
            'title' => 'required|min:8',
            'slug'        => 'required|unique:categories,slug',
            'description' => 'nullable|string|max:500',
            'status'      => 'required|in:Active,Inactive',


        ]);
        $category = new category;
        $category->title = $request->title;
        $category->slug        = $request->slug;
        $category->description = $request->description;
        $category->status      = $request->status;
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

    // edit category //

    public function category_edit($id)
    {
        $category = Category::find($id);

        return view('admin.products.editcategory', compact('category'));
    }
    // update category //

   public function category_update($id, Request $request)
{
    $validated = $request->validate([
        'title'       => 'required|min:3|max:255',
        'slug'        => 'required|unique:categories,slug,' . $id, 
        'description' => 'nullable|string|max:500',
        'status'      => 'required|in:Active,Inactive',
    ]);

    $category = Category::findOrFail($id);
    $category->title       = $request->title;
    $category->slug        = $request->slug;
    $category->description = $request->description;
    $category->status      = $request->status;
    $category->save();

    return redirect()->route('admin.products.category')->with('success', 'Category Updated Successfully');
}

}
