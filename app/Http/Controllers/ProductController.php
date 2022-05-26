<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        return view('gallery');
    }


    public function get()
    {
        $products = Product::all();

        return view('gallery')->with('products', $products);
    }
}
