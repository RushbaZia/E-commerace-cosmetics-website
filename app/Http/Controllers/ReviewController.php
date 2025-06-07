<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with('product')
            ->where('user_id', auth()->id())
            ->get();

        return view('admin.pages.review', compact('reviews'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Review::updateOrCreate(
            ['user_id' => auth()->id(), 'product_id' => $request->product_id],
            ['rating' => $request->rating]
        );

        return response()->json(['success' => 'Rating submitted successfully']);
    }
}
