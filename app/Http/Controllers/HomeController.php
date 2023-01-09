<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $feature_product = Product::where('featured', true)->get();
        $new_product = Product::all()->sortBy('created_at');
        return view('user.main', ['feature_product' => $feature_product, 'new_product' => $new_product]);
    }
}
