<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\Transactions_item;
use Illuminate\Http\Request;
use Laravel\Cashier\Cashier;

class TransactionsController extends Controller
{

    public function index()
    {
        $transactions =  Transaction::all();
        return view('admin.transactions.index', ['transactions' => $transactions]);
    }

    public function show($stripe_id)
    {
        $transactions_item = Transactions_item::where('stripe_id', $stripe_id)->get();
        $products_all = Product::all();
        return view('admin.transactions.show', ['transactions_item' => $transactions_item, 'products_all' => $products_all]);
    }

}
