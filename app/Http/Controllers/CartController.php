<?php

namespace App\Http\Controllers;

class CartController extends Controller
{
    public function index() {
        $cart_item = 0;
        return view('user.cart', ['cart_item' => $cart_item]);
    }
}
