<?php

namespace App\Http\Controllers;

use App\Mail\AddtoCartMail;
use App\Mail\AddtofavoritesMail;
use App\Models\Favorit;
use App\Models\Product;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class ProductController extends Controller
{

    public function show($name)
    {
        $product = Product::where('name', $name)->where('visibility', true)->firstOrFail();
        $comments = Comment::where('product_id', $product->id)->get();
        return view("user.product", ['product' => $product, 'comments' => $comments]);
    }

    public function addToCart(Request $request)
    {
        $product = Product::where('name', $request->name)->firstOrFail();
        $comments = Comment::where('product_id', $product->id)->get();
        if (Auth::check()) {
            $cart = Cart::firstOrCreate(
                ['product_id' => $request->id, 'quantity' => $request->quantity, 'user_email' => Auth::user()->email],
            );
            Mail::to($cart->user_email)->send(new AddtoCartMail($product));
        }
        else {
           session()->push('cart', $request->id);
        }

        return redirect()->view("user.product", ['product' => $product, 'comments' => $comments])->with('success', 'Product added to cart successfully.');
    }

    public function cart()
    {
        return view("user.cart");
    }

    public function addToCartId($id)
    {
        if (Auth::check()) {
            Cart::firstOrCreate(
                ['product_id' => $id, 'quantity' => 1, 'user_email' => Auth::user()->email],
            );
            $product = Product::find($id);
            Mail::to(Auth::user()->email)->send(new AddtoCartMail($product));
            }
        else {
            session()->push('cart', $id);
        }
    }

    public function deleteFromCart($id)
    {
        Cart::where('product_id', $id)->delete();
        /*return redirect()->view('user.main')->with('success', 'Product added to cart successfully.');*/
    }

    public function addToFavorite($id) {
        if (Auth::check()) {
            Favorit::firstOrCreate(
                ['product_id' => $id],
                ['user_email' => Auth::user()->email]
            );
            $product = Product::find($id);
            Mail::to(Auth::user()->email)->send(new AddtofavoritesMail($product));
        }
        else {
            session()->push('favorite', $id);
        }
        /*return redirect()->route('catalog', ['id' => $product->category])->with('success', 'Product added to favorite successfully.');*/
    }

    public function deleteFromFavorite($id)
    {
        Favorit::where('product_id', $id)->delete();
        /*return redirect()->view('user.main')->with('success', 'Product added to cart successfully.');*/
    }


}
