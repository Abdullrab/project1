<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Storage;


use App\Http\Controllers\Controller;
use App\Models\Product;
use  App\models\category;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    // Fetch all products //
    public function products()
    {
        $products = Product::all(); // get all products
        return view('admin.products.products', compact('products'));
    }
    // create product page //
    public function create()
    {
        $categories = category::all();
        return view('admin.products.create', compact('categories'));
    }

    // save product //

    public function save(request $request)
    {
        $validated = $request->validate([
            'title'        => 'required|string|max:255',
            'category'    => 'required|exists:categories,id',
            'price'       => 'required|numeric|min:0',
            'quantity'    => 'required|integer|min:1',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {

            $name = time() . 'productimage.' . $request->image->getClientOriginalExtension();
            $request->image->storeAs('products', $name, 'public');
        }

        // Save Product
        $product = new Product();
        $product->title        = $request->title;          // form field: title
        $product->category_id = $request->category;       // form field: category
        $product->price       = $request->price;          // form field: price
        $product->quantity    = $request->quantity;       // form field: quantity
        $product->description = $request->description;    // form field: description
        $product->image       = $name;               // uploaded image name
        $product->save();

        return redirect()->route('admin.products')->with('success', 'Product created successfully!');
    }

    // product delete (custom style like category_delete)
    public function product_delete($id)
    {
        // find product or fail
        $product = Product::findOrFail($id);

        // optional: delete image file from storage if exists
        if ($product->image) {
            // image stored at storage/app/public/products/...
            if (Storage::exists('public/products/' . $product->image)) {
                Storage::delete('public/products/' . $product->image);
            }
        }

        // delete product record
        $product->delete();

        // redirect back with flash message (same style as categories)
        return redirect()->back()->with('warning', 'Product Deleted Successfully');
    }
}
