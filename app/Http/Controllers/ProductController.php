<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::with('category')->get();
        return view('admin.pages.products.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.pages.products.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::create($request->except('_token', 'category_id'));
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $request->file('image')->storeAs('public/upload', $filename);
            $product->image = $filename;
        }
        $product->image = "upload/$filename";

        $product->save();
        $product->category()->attach($request->category_id);

        return redirect()->route('products.index')->with('status', 'Product added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $category = Category::find($product);
        return view('client.pages.shop', compact('product', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $category = $product->category()->get()->pluck('id')->toArray();
        return view('admin.pages.products.edit', compact('product', 'categories', 'category'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->except('_token'));
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $request->file('image')->storeAs('public/upload', $filename);
            $product->image = $filename;
        }
        $product->image = "upload/$filename";

        $product->update();
        $product->category()->sync($request->category_id);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->category()->detach();
        $product->delete();
        return redirect()->route('products.index')->with('delete', 'Product Deleted!');
    }
}
