<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'ASC')->take(20)->get();
        return view('products.index')->with('products', $products);
    }

    public function show()
    {
        $product = array();
        return view('products.show')->with('product', product);
    }

    public function search()
    {
        $products = array();
        return view('products.search')->with('products', $products);
    }
}
