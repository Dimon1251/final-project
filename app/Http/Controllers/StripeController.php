<?php

namespace App\Http\Controllers;

use App\Models\Transactions_item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\Cart;

class StripeController extends Controller
{

    public function index()
    {
        Transaction::where('paid', false)->delete();
        return redirect()->route('cart.show');
    }

    public function checkout(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $session =\Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'Order',
                        ],
                        'unit_amount' => $request->price * 100,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success').'?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('index'),
        ]);

        Transaction::firstOrCreate(
            ['stripe_id' => $session->id],
            ['price' => $request->price, 'user_email' => Auth::user()->email, 'paid' => false]
        );

        return redirect()->away($session->url);
    }

    public function success()
    {

        Transaction::where('stripe_id', request()->session_id)
            ->update(['paid' => true]);

        $carts = Cart::where('user_email', Auth::user()->email)
            ->get();

        foreach ($carts as $cart){
            Transactions_item::create(
            ['stripe_id' => request()->session_id, 'product_id' => $cart->product_id, 'quantity' => $cart->quantity]
        );
        }

        return redirect()->route('main');
    }

}
