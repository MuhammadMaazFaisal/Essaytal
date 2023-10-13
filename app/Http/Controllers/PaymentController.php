<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class PaymentController extends Controller
{
    

    public function handlePayment()
    {
        $cart = session()->get('cart', []);
        $total = array_sum(array_column($cart, 'price'));

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $paymentIntent = PaymentIntent::create([
            'amount' => $total,
            'currency' => 'usd',
        ]);

        $intent = $paymentIntent->client_secret;

        return view('stripe', compact('intent', 'total'));
    }

    public function paymentSuccess()
    {
        // Handle post-payment logic here, such as thanking the user and clearing the cart
        session()->forget('cart');
        return view('success');
    }
}
