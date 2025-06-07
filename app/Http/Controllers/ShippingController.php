<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;

class ShippingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Checkout::with('user', 'orderItems')->get();
        return view("admin.pages.shipping.index", compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Checkout::findOrFail($id);
        return view('admin.pages.shipping.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'status' => 'required|in:' . implode(',', array_keys(Checkout::STATUSES)),
        ]);
        $order = Checkout::findOrFail($id);
        $order->update([
            'status' => $request->status,
        ]);

        return redirect()->route('shipping.index')->with('success', 'Order updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Checkout::findOrFail($id);
        $order->delete();

        return redirect()->route('shipping.index')->with('delete', 'Order deleted successfully!');
    }
}
