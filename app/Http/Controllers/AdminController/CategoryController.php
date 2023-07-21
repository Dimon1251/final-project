<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    public function index()
    {
        $categories =  Category::withTrashed()->get();
        return view('admin.categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CreateCategoryRequest $request)
    {
        $category = Category::firstOrCreate(
            ['name' => $request->name],
        );
        Storage::disk('local')->makeDirectory('public/categories/'.$category->name);
        $request->file('image')->storeAs('public/categories/'.$category->name, 'image.jpg');
        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', ['category' => $category]);
    }

    public function update(EditCategoryRequest $request, $id)
    {
        $category = Category::find($id);
            Category::where('id', $id)
            ->update(['name' => $request->name]);
        if ($request->image != '') {
            Storage::delete('public/categories/'.$category->name.'/image.jpg');
            $request->file('image')->storeAs('public/categories/'.$request->name, 'image.jpg');
        }
        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        Category::where('name', $category->name)->delete();
        Storage::deleteDirectory('public/categories/'.$id);
        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
    }

    public function restore($id)
    {
        Category::withTrashed()->find($id)->restore();
        return redirect()->route('admin.categories.index')->with('success', 'Category restored successfully.');
    }
}
