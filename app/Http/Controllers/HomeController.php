<?php

namespace App\Http\Controllers;

use App\Mail\AddtoCartMail;
use App\Mail\AddtofavoritesMail;
use App\Models\Cart;
use App\Models\Favorit;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $value = session('cart');
        if ($value != "") {
            for ($i = 0; $i < count($value); $i++) {
                Cart::firstOrCreate(
                    ['product_id' => $value[$i], 'quantity' => 1, 'user_email' => Auth::user()->email],
                );
                $product = Product::find($value[$i]);
                Mail::to(Auth::user()->email)->send(new AddtoCartMail($product));
            }
        }
        $favorite = session('favorite');
        if ($favorite != "") {
            for ($i = 0; $i < count($favorite); $i++) {
                Favorit::firstOrCreate(
                    ['product_id' => $favorite[$i]],
                    ['user_email' => Auth::user()->email]
                );
                $product = Product::find($favorite[$i]);
                Mail::to(Auth::user()->email)->send(new AddtofavoritesMail($product));
            }
        }
        $feature_product = Product::where('featured', true)->where('visibility', true)->get();
        $new_product = Product::all()->where('visibility', true)->sortBy('created_at');
        return view('user.main', ['feature_product' => $feature_product, 'new_product' => $new_product]);
    }
}
