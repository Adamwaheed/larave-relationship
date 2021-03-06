<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('brand','category','vendor')->take(20)->get();

        return view('products.index')->with('products',$products);
    }

}
