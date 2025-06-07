<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use Session;
use Stripe;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe(Request $data)
    {
        $checkoutData = session('checkout_data');
        $total = 0;
        foreach ((array) session('cart') as $id => $details) {
            $total += $details['price'] * $details['quantity'];
        }
        return view('stripe', compact('checkoutData', 'total'));
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $total = 0;
        foreach ((array) session('cart') as $id => $details) {
            $total += $details['price'] * $details['quantity'];
        }

        \Stripe\Charge::create([
            "amount" => $total * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Order Payment",
        ]);
        
        $checkoutData = session('checkout_data');
        $tracking_no = $checkoutData['tracking_no'];
        $checkout = Checkout::create($checkoutData);

        // Create order items
        foreach ((array) session('cart') as $productId => $details) {
            \App\Models\OrderItem::create([
                'checkout_id' => $checkout->id,
                'product_id'  => $productId,
                'price'       => $details['price'],
                'quantity'    => $details['quantity'],
            ]);
        }

        // Clean up
        session()->forget('cart');
        session()->forget('checkout_data');

        return redirect()->route('checkout.create')->with([
            'status' => "Order placed successfully!",
            'tracking' => $tracking_no,
        ]);
    }
}
