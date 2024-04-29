<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = product::paginate(4);
        return view('admin.pages.products.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.products.create');
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

        $product->save();
        return redirect()->route('products.index')->with('status', 'Product Created Successfully!!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = product::findorfail($id);
        return view('admin.pages.products.show', compact('product'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = product::findorfail($id);
        return view('admin.pages.products.edit', compact('product'));
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
        return redirect()->route('products.index')->with('status', 'Product Updated Successfully!!!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = product::findorfail($id);
        $product->delete();
        return redirect()->route('products.index')->with('delete', 'Product deleted Successfully!!!');
    }
}
