<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\Transactions_item;
use App\Models\User;
use Carbon\Carbon;

class MainController extends Controller
{

    public function main() {
        $feature_product = Product::where('featured', true)->where('visibility', true)->get();
        $new_product = Product::all()->where('visibility', true)->sortByDesc('created_at');
        return view('user.main', ['feature_product' => $feature_product, 'new_product' => $new_product]);
    }

    public function admin() {

        $sales_total = count(Transactions_item::all());
        $sales_month = Transactions_item::whereDate('created_at', '>', Carbon::now()->subDays(30))->count();

        $account_total = count(User::all());
        $account_month = User::whereDate('created_at', '>', Carbon::now()->subDays(30))->count();

        $transactions_all = Transaction::all();
        $earnings_total = 0;
        foreach ($transactions_all as $transaction){
            $earnings_total =  $earnings_total + $transaction->price;
        }

        $transactions_month = Transaction::whereDate('created_at', '>', Carbon::now()->subDays(30))->get();
        $earnings_month = 0;
        foreach ($transactions_month as $transaction){
            $earnings_month =  $earnings_month + $transaction->price;
        }

        $orders_total = count(Transaction::all());
        $orders_month = Transaction::whereDate('created_at', '>', Carbon::now()->subDays(30))->count();

        return view('admin.admin-panel', [
            'sales_total' => $sales_total,
            'sales_month' => $sales_month,
            'account_total' => $account_total,
            'account_month' => $account_month,
            'earnings_total' => $earnings_total,
            'earnings_month' => $earnings_month,
            'orders_total' => $orders_total,
            'orders_month' => $orders_month,
        ]);
    }

    public function ban() {
        return view('user.ban');
    }
}
