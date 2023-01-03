<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    public function index()
    {
        $categories =  Category::withTrashed()->get();
/*        $categories = Category::withTrashed();
        $categories = Category::onlyTrashed();*/
        return view('admin.categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $category = Category::firstOrCreate(
            ['name' => $request->name],
        );
        Storage::disk('local')->makeDirectory('public/categories/'.$category->name);
        $request->file('image')->storeAs('public/categories/'.$category->name, 'image.jpg');

        return redirect()->route('admin.categories.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {

            Category::where('id', $id)
            ->update(['name' => $request->name]);
        if ($request->image != '') {
            Storage::delete('public/categories/'.$category->name.'/image.jpg');
            $request->file('image')->storeAs('public/categories/'.$request->name, 'image.jpg');
        }

        return redirect()->route('admin.categories.index');

    }

    public function destroy($id)
    {

        $category = Category::find($id);
  /*      Product::withTrashed()->find('1')->restore();
        Product::where('category', $category->name)->update(['category' => 'null']);*/


        Category::where('name', $category->name)->delete();
        Storage::deleteDirectory('public/categories/'.$id);
        return redirect()->route('admin.categories.index');
    }

    public function restore($id)
    {
        Category::withTrashed()->find($id)->restore();
        return redirect()->route('admin.categories.index');
    }


}
