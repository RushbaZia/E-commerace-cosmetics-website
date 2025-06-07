<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Product;
use App\Models\Post;
use App\Models\User;
use App\Models\Checkout;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;



use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function numberCount()
    {
        $categories = Category::get();
        $products = Product::get();
        $posts = Post::get();
        // $users = User::get();
        $users = Checkout::with('user', 'orderItems')->get();
        $userId = Auth::id();

        $orders = Checkout::where('user_id', $userId)->latest()->get();

        $statusCounts = [
            'completed' => $orders->where('status', 'completed')->count(),
            'inprocess' => $orders->where('status', 'inprocess')->count(),
            'pending'   => $orders->where('status', 'pending')->count(),
            'declined'  => $orders->where('status', 'declined')->count(),
        ];
        $nextDelivery = $orders->where('status', '!=', 'declined')->first();
        return view('admin.dashboard', compact('categories', 'products', 'posts', 'users', 'orders', 'statusCounts', 'nextDelivery'));
    }
    public function userOrders()
    {
        $userId = Auth::id();
        $orders = Checkout::where('user_id', $userId)->latest()->get();
        return view('admin.pages.orders', compact('orders'));
    }
    public function allReviews()
{
    $reviews = Review::with('user', 'product')->latest()->get();
    return view('admin.pages.all-reviews', compact('reviews'));
}
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
