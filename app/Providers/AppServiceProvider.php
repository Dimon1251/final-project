<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Favorit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


      /*  $carts = '';
        $carts_price = 0;
        $favorits = '';
            view()->composer('*', function ($view) {
                if(Auth::check()) {
                    $carts_price = 0;
                    $carts = Cart::where('user_email', Auth::user()->email)->get();
                    foreach ($carts as $cart) {
                        $product = Product::find($cart->product_id);
                        $carts_price = $carts_price + ($product->price * $cart->quantity);
                    }
                    View::share('carts_price', $carts_price);
                    View::share('carts', $carts);
                }
            });

        view()->composer('*', function ($view) {
            if(Auth::check()) {
                $favorits = Favorit::where('user_email', Auth::user()->email)->get();
                View::share('favorits', $favorits);
            }
        });

        View::share('carts_price', $carts_price);
        View::share('carts', $carts);
        View::share('favorits', $favorits);
        View::share('categories', Category::all()->where('visibility', true));
        View::share('products_all', Product::all()->where('visibility', true));
        View::share('featured', Product::where('featured', true)->where('visibility', true)->get());*/


    }
}
