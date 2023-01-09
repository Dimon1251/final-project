<?php

namespace App\Http\Controllers;

use App\Mail\AddtoCartMail;
use App\Mail\AddtofavoritesMail;
use App\Models\Favorit;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Illuminate\Support\Facades\Mail;


class ProductController extends Controller
{

    public function show($name)
    {
        $product = Product::where('name', $name)->firstOrFail();
        return view("user.product", ['product' => $product]);
    }

    public function addToCart(Request $request)
    {
        $cart = Cart::firstOrCreate(
            ['product_id' => $request->id, 'quantity' => $request->quantity, 'user_email' => Auth::user()->email],
        );
        $product = Product::where('name', $request->name)->firstOrFail();
        Mail::to($cart->user_email)->send(new AddtoCartMail($product));
        return redirect()->view('user.product')->with('success', 'Product added to cart successfully.');
    }

    public function cart()
    {
        return view("user.cart");
    }

    public function addToCartId($id)
    {
        Cart::firstOrCreate(
            ['product_id' => $id, 'quantity' => 1, 'user_email' => Auth::user()->email],
        );
        return redirect()->view('user.main')->with('success', 'Product added to cart successfully.');
    }

    public function addToFavorite($id) {
        $product = Product::find($id);
        Favorit::firstOrCreate(
            ['product_id' => $product->id],
            ['user_email' => Auth::user()->email]
        );
        Mail::to(Auth::user()->email)->send(new AddtofavoritesMail($product));
        return redirect()->route('catalog', ['id' => $product->category])->with('success', 'Product added to favorite successfully.');
    }
}
