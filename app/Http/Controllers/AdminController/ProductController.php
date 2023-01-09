<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\EditProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
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
        $brands = Brand::all();
        $categories = Category::all();
        $product =  Product::find($id);
        return view('admin.products.edit', ['product' => $product, 'categories' => $categories, 'brands' => $brands]);
    }
    public function update(EditProductRequest $request, $id)
    {
        Product::where('id', $id)
            ->update(['name' => $request->name, 'featured' => (bool)$request->featured, 'description' => $request->description, 'price' => $request->price,
                'category' => $request->category, 'visibility' => (bool)$request->visibility]);
        if($request->links != null) {
            Storage::deleteDirectory('public/products/'.$id);
            Storage::disk('local')->makeDirectory('public/products/'.$id);
            for ($i = 1; $i <= count($request->links); $i++) {
                $request->file('links')['link'.($i-1)]->storeAs('public/products/'.$id, $i.'.jpg');
            }
        }
        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        Storage::deleteDirectory('public/products/'.$id);
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }

    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.products.create', ['categories' => $categories, 'brands' => $brands]);
    }

    public function store(CreateProductRequest $request)
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
        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }
}
