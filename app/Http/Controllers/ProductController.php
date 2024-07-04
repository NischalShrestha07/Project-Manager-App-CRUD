<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = "Product list from in ProductXontroller";
        return view('products.index', ['products' => $products]);
    }
}
