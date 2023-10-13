<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
{
    $products = [
        ['id' => 1, 'name' => 'Product 1', 'price' => 1000],
        ['id' => 2, 'name' => 'Product 2', 'price' => 2000],
        ['id' => 3, 'name' => 'Product 3', 'price' => 3000],
    ];

    return view('products', compact('products'));
}
}
