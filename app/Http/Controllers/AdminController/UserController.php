<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index()
    {
        $users =  User::all();
        return view('admin.users.index', ['users' => $users]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        if ($request->password == '') {
            User::where('id', $id)
                ->update(['name' => $request->name, 'email' => $request->email]);
        }
        else {
            User::where('id', $id)
                ->update(['name' => $request->name, 'email' => $request->email, 'password' => Hash::make($request->password)]);
        }
        if($request->image != '') {
            Storage::disk('local')->makeDirectory('public/users/'.$id);
            $request->file('image')->storeAs('public/users/'.$id, 'avatar.jpg');
        }
        return redirect()->route('admin.users.index');

    }
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('admin.users.index');
    }
    public function login($id)
    {
        $user = User::find($id);
        Auth::guard('web')->login($user);

        return redirect()->route('admin.users.index');
    }

    public function ban($id)
    {
        User::where('id', $id)
            ->update(['is_banned' => true]);

        return redirect()->route('admin.users.index');
    }

    public function unban($id)
    {
        User::where('id', $id)
            ->update(['is_banned' => false]);

        return redirect()->route('admin.users.index');
    }

}
