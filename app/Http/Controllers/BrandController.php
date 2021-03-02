<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function show($id)
    {

        $brand = Brand::with('products.category','products.brand')->find($id);
        return $brand;
        $brands = Brand::all();

        return view('brand.show')->with('brand', $brand)->with('brands',$brands);

    }
}
