<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class  ProductController extends Controller
{
    public function index()
    {
        $products =  Product::all();
        return view('admin.products.index', ['products' => $products]);
    }
    public function edit($id)
    {
        $categories = Category::all();
        $product =  Product::find($id);
        return view('admin.products.edit', ['product' => $product, 'categories' => $categories]);
    }
    public function update(Request $request, $id)
    {
        Product::where('id', $id)
            ->update(['name' => $request->name, 'featured' => (bool)$request->featured, 'description' => $request->description, 'price' => $request->price,
                'category' => $request->category, 'visibility' => (bool)$request->visibility]);

        if($request->links != '') {
            for ($i = 1; $i <= count($request->links); $i++) {
                Storage::delete('public/products/' . $id . '/' . $i . '.jpg');
                $request->file('links')['link' . ($i - 1)]->storeAs('public/products/' . $id, $i . '.jpg');
            }
        }

        return redirect()->route('admin.products.index');
    }

    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        Storage::deleteDirectory('public/products/'.$id);

        return redirect()->route('admin.products.index');
    }

    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();

        return view('admin.products.create', ['categories' => $categories, 'brands' => $brands]);
    }

    public function store(Request $request)
    {
        $product = Product::firstOrCreate(
            ['name' => $request->name],
            ['featured' => (bool)$request->featured, 'description' => $request->description, 'price' => $request->price,
                'category' => $request->category, 'visibility' => (bool)$request->visibility, 'image' => 'null', 'brand' => $request->brand]
        );

        for ($i = 1; $i <= count($request->links); $i++) {
            Storage::disk('local')->makeDirectory('public/products/'.$product->id);
            $request->file('links')['link'.($i-1)]->storeAs('public/products/'.$product->id, $i.'.jpg');
        }

        return redirect()->route('admin.products.index');
    }
}
