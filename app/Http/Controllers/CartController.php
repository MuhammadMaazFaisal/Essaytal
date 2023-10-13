<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($productId)
    {
        $products = [
            1 => ['name' => 'Product 1', 'price' => 1000],
            2 => ['name' => 'Product 2', 'price' => 2000],
            3 => ['name' => 'Product 3', 'price' => 3000],
        ];

        $product = $products[$productId];

        $cart = session()->get('cart', []);
        $cart[$productId] = $product;
        session()->put('cart', $cart);

        return redirect()->route('cart');
    }

    public function showCart()
    {
        $cart = session()->get('cart', []);
        $total = array_sum(array_column($cart, 'price'));

        return view('cart', compact('cart', 'total'));
    }
}
