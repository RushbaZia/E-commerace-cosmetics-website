<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $product = product::get();
        $product = product::with('category')->paginate(4);
        // $product=DB::table('products')->orderBy('id')->paginate(4);
        return view('admin.pages.products.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.pages.products.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new product;
        $product->name = $request->name;
        $product->image = $request->image;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->details = $request->details;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $request->file('image')->storeAs('public/upload', $filename);
            $product->image = $filename;
        }
        $product->image = "upload/$filename";
        $product->category()->attach($request->category_id);

        return redirect()->route('products.index')->with('status', 'Product Created Successfully!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $category = Category::find($product);
        return view('admin.pages.products.show', compact('product','category'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $course=$product->category()->get()->pluck('id')->toArray();
        return view('admin.pages.products.edit', compact('product','categories','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product = product::find($request->id);
        $product->name = $request->name;
        $product->image = $request->image;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->details = $request->details;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $request->file('image')->storeAs('public/upload', $filename);
            $product->image = $filename;

            // if (File::exists($product->image)) {
            //     File::delete($product->image);
            // }
        }
        $product->image = "upload/$filename";

        $product->update();
        $product->category()->sync($request->category_id);
        return redirect()->route('products.index')->with('status', 'Product Updated Successfully!!!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->category()->detach();
        $product->delete();
        return redirect()->route('products.index')->with('delete', 'Product deleted Successfully!!!');
    }
}
