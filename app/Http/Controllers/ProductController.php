<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;


class ProductController extends Controller
{

    public function shop($id)
    {
        $categories = Category::all();
        $category = Category::where('name', $id)->firstOrFail();
        $products = Product::where('category', $id)->get();
        return view("user.shop", ['products' => $products, 'categories' => $categories, 'category' => $category ]);
    }


    public function account()
    {
        $categories = Category::all();
        $user = User::where('name', Auth::user()->name )->firstOrFail();
        return view("user.account", ['categories' => $categories, 'user' => $user]);
    }


    public function show($name)

    {
        $product = Product::where('name', $name)->firstOrFail();;
        return view("user.show", ['product' => $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cart::firstOrCreate(
            ['product_id' => $request->id, 'quantity' => $request->quantity, 'user_email' => Auth::user()->email],
        );
        $product = Product::where('name', $request->name)->firstOrFail();;
        return view("user.show", ['product' => $product]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cart()
    {
        return view("user.cart");
    }

    public function toCart($id)
    {
        Cart::firstOrCreate(
            ['product_id' => $id, 'quantity' => 1, 'user_email' => Auth::user()->email],
        );
        return redirect()->view('user.main');
    }
}
