<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $feature_product = Product::where('featured', true)->get();
        $new_product = Product::all()->sortBy('created_at');
        return view('user.main', ['feature_product' => $feature_product, 'new_product' => $new_product]);
    }
}
