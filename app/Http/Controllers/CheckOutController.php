<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            $user = User::get();
            $cart = session()->get('cart', []);
            return view('client.pages.checkout', compact('user', 'cart'));
        } else {
            return redirect()->route('login')->with('error', 'You have to login first');
        }
    }
    public function getCartTotal()
    {
        $total = 0;
        foreach ((array) session('cart') as $details) {
            $total += $details['price'] * $details['quantity'];
        }
        return $total;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tracking_no = 'PG-' . strtoupper(uniqid());
        if ($request->paymentMethod == 'cod') {
            $checkout = Checkout::create([
                'user_id'      => $request->user_id,
                'fname'        => $request->fname,
                'lname'        => $request->lname,
                'email'        => $request->email,
                'password'     => $request->password,
                'address1'     => $request->address1,
                'address2'     => $request->address2,
                'city'         => $request->city,
                'zip'          => $request->zip,
                'paymentMethod' => $request->paymentMethod,
                'cardNumber' => $request->cardNumber,
                'expiryDate' => $request->expiryDate,
                'cvv' => $request->cvv,
                'total' => $request->total,
                'tracking_no'  => $tracking_no,
                // 'status'       => 'pending',
            ]);
            foreach ((array) session('cart') as $productId => $details) {
                \App\Models\OrderItem::create([
                    'checkout_id' => $checkout->id,
                    'product_id'  => $productId,
                    'price'       => $details['price'],
                    'quantity'    => $details['quantity'],
                ]);
            }
            session()->forget('cart');

            return redirect()->route('checkout.create')->with([
                'status' => "Order placed successfully!",
                'tracking' => $tracking_no,
            ]);
        } elseif ($request->paymentMethod == 'stripe') {
            // Store form data in session to use after Stripe payment
            session([
                'checkout_data' => array_merge($request->all(), [
                    'tracking_no' => $tracking_no,
                ])
            ]);
            return redirect()->to('/stripe');
        }
        return redirect()->route('checkout.create')->with([
            'status' => "Order placed successfully!",
            'tracking' => $tracking_no,
        ]);
    }
}
