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
    public function productShop()
    {
        $products = Product::get();
        return view('client.pages.shop', compact('products'));
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
    public function shop(Request $request)
    {
        $perPage = 8; // Number of products per page
        $products = Product::orderBy('created_at', 'desc')->paginate($perPage);

        // Check if the request is an AJAX call
        if ($request->ajax()) {
            return response()->json([
                'products' => view('client.partials.product_cards', compact('products'))->render(),
                'next_page_url' => $products->nextPageUrl()
            ]);
        }

        return view('client.pages.shop', compact('products'));
    }
    public function fetchMoreProducts(Request $request)
{
    $products = Product::paginate(8); // Use same page size as initial

    if ($request->ajax()) {
        $view = view('client.partials.product_cards', compact('products'))->render();

        return response()->json([
            'products' => $view,
            'next_page_url' => $products->nextPageUrl()
        ]);
    }

    return view('client.pages.shop', compact('products'));
}

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $category = Category::find($product);
        return view('admin.pages.products.show', compact('product', 'category'));
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
        $product->update($request->except('_token', 'category_id'));
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
    public function cart()
    {
        return view('client.pages.cart');
    }


    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }


    public function update2(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }


    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
