<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function show(Request $request, $id)
    {
        $products_featured =  Product::where('category', $id)->where('featured', true)->take(6)->get();
        $brands = Brand::all();
        $category = Category::where('name', $id)->firstOrFail();


        if($request->brand == '') {
            $brand_current = "All";
            $page_total = ceil(count(Product::where('category', $id)->get())/10);
            $products = Product::where('category', $id)->take(12)->get();
            $page_current = 1;
            $orderBy = "default";
            $products_quantity_from = 1;
            $products_quantity_to = count($products);
            $products_quantity_total = count(Product::where('category', $id)->get());
        }



        if(isset($request->orderBy)){
            $orderBy = $request->orderBy;
            $page_current = $request->page;
            $brand_current = $request->brand;
            $products_quantity_from = (12 * ($page_current - 1)) + 1;
            if($request->brand == "All") {
                if ($request->orderBy == 'default') {
                    $products = Product::where('category', $id)->skip((($page_current) - 1) * 12)->take(12)->get();
                }
                if ($request->orderBy == 'price-low-high') {
                    $products = Product::where('category', $id)->orderBy('price')->skip((($page_current) - 1) * 12)->take(12)->get();
                }
                if ($request->orderBy == 'price-high-low') {
                    $products = Product::where('category', $id)->orderBy('price', 'desc')->skip((($page_current) - 1) * 12)->take(12)->get();
                }
                if ($request->orderBy == 'name-a-z') {
                    $products = Product::where('category', $id)->orderBy('name')->skip((($page_current) - 1) * 12)->take(12)->get();
                }
                if ($request->orderBy == 'name-z-a') {
                    $products = Product::where('category', $id)->orderBy('name', 'desc')->skip((($page_current) - 1) * 12)->take(12)->get();
                }
                $products_quantity_to = $products_quantity_from + count($products) - 1;
                $products_quantity_total = count(Product::where('category', $id)->get());
                $page_total = ceil(count(Product::where('category', $id)->get())/10);
            }
            else {
                if ($request->orderBy == 'default') {
                    $products = Product::where('category', $id)->where('brand' , $brand_current)->skip((($page_current) - 1) * 12)->take(12)->get();
                }
                if ($request->orderBy == 'price-low-high') {
                    $products = Product::where('category', $id)->where('brand' , $brand_current)->orderBy('price')->skip((($page_current) - 1) * 12)->take(12)->get();
                }
                if ($request->orderBy == 'price-high-low') {
                    $products = Product::where('category', $id)->where('brand' , $brand_current)->orderBy('price', 'desc')->skip((($page_current) - 1) * 12)->take(12)->get();
                }
                if ($request->orderBy == 'name-a-z') {
                    $products = Product::where('category', $id)->where('brand' , $brand_current)->orderBy('name')->skip((($page_current) - 1) * 12)->take(12)->get();
                }
                if ($request->orderBy == 'name-z-a') {
                    $products = Product::where('category', $id)->where('brand' , $brand_current)->orderBy('name', 'desc')->skip((($page_current) - 1) * 12)->take(12)->get();
                }
                $products_quantity_to = $products_quantity_from + count($products) - 1;
                $products_quantity_total = count(Product::where('category', $id)->where('brand' , $brand_current)->get());
                $page_total = ceil(count(Product::where('category', $id)->where('brand' , $brand_current)->get())/10);
            }
        }

        if($request->ajax()){
            return view('ajax.order-by',[
                'page_total' => $page_total,
                'products' => $products,
                'brand_current' => $brand_current,
                'page_current' => $page_current,
                'products_quantity_to' => $products_quantity_to,
                'products_quantity_from' => $products_quantity_from,
                'products_quantity_total' => $products_quantity_total,
                'orderBy' => $orderBy,
            ])->render();
        }

        return view("user.catalog", ['products' => $products, 'category' => $category, 'brands' => $brands, 'orderBy' => $orderBy, 'brand_current' => $brand_current,
            'products_quantity_total' => $products_quantity_total, 'page_total' => $page_total, 'products_featured' => $products_featured, 'page_current' => $page_current,
            'products_quantity_to' => $products_quantity_to, 'products_quantity_from' => $products_quantity_from]);
    }

    public function showBrand(Request $request, $id, $brand)
    {
        $brands = Brand::all();
        $categories = Category::all();
        $category = Category::where('name', $id)->firstOrFail();
        $products = Product::where('category', $id)->where('brand', $brand)->get();

        if(isset($request->orderBy)){
            if($request->orderBy == 'price-low-high'){
                $products = Product::where('category', $id)->where('brand', $brand)->orderBy('price')->get();
            }
            if($request->orderBy == 'price-high-low'){
                $products = Product::where('category', $id)->where('brand', $brand)->orderBy('price', 'desc')->get();
            }
            if($request->orderBy == 'name-a-z'){
                $products = Product::where('category', $id)->where('brand', $brand)->orderBy('name')->get();
            }
            if($request->orderBy == 'name-z-a'){
                $products = Product::where('category', $id)->where('brand', $brand)->orderBy('name', 'desc')->get();
            }
        }

        if($request->ajax()){
            return view('ajax.order-by',[
                'products' => $products
            ])->render();
        }

        return view("user.catalog", ['products' => $products, 'categories' => $categories, 'category' => $category, 'brands' => $brands ]);
    }


}
