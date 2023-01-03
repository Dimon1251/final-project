<?php

namespace App\Http\Controllers;

use App\Models\Favorit;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function show() {
        return view('user.cart');
    }

    public function checkout() {
        return view('user.checkout');
    }

    public function store($id) {
        $product = Product::find($id);

        Favorit::firstOrCreate(
            ['product_id' => $product->id],
            ['user_email' => Auth::user()->email]
        );

        return redirect()->route('shop', ['id' => $product->category]);
    }
}
