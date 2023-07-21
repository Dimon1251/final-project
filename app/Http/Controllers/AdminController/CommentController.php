<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index($product_id)
    {
       $comments = Comment::where('product_id', $product_id)->get();
       return view('admin.comments.index', ['comments' => $comments]);
    }

    public function destroy($id)
    {
        Comment::where('id', $id)->delete();
    }

    public function store(Request $request)
    {
        Comment::Create(
            ['product_id' => $request->product_id, 'author' => Auth::user()->email, 'name' => Auth::user()->name, 'text' => $request->comments]
        );

        $product = Product::where('id', $request->product_id)->firstOrFail();
        return redirect()->route('products.show', ['product' => $product->name])->with('success', 'Comment added successfully.');
    }


}
