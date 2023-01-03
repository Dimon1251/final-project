<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands =  Brand::all();
        return view('admin.brands.index', ['brands' => $brands]);
    }

    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(Request $request)
    {
        Brand::firstOrCreate(
            ['name' => $request->name],
        );
        return redirect()->route('admin.brands.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('admin.brands.edit', ['brands' => $brand]);
    }

    public function update(Request $request, $id)
    {
        Brand::where('id', $id)
            ->update(['name' => $request->name]);
        return redirect()->route('admin.brands.index');

    }

    public function destroy($id)
    {
        Brand::where('id', $id)->delete();
        return redirect()->route('admin.brands.index');
    }

    public function hide($id)
    {
        Brand::where('id', $id)
            ->update(['visibility' => false]);
        return redirect()->route('admin.brands.index');
    }

    public function unhide($id)
    {
        Brand::where('id', $id)
            ->update(['visibility' => true]);
        return redirect()->route('admin.brands.index');
    }
}
