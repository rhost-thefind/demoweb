<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function show($slug)
    {
        //return $slug;
        $product = Product::where('slug', $slug)->get()[0];
        //return $product;
        return view('products.show', ['product' => $product]);
    }
}
