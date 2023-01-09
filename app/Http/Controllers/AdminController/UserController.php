<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditUserRequest;
use App\Models\User;
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

    public function update(EditUserRequest $request, $id)
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
        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }

    public function login($id)
    {
        $user = User::find($id);
        Auth::guard('web')->login($user);
        return redirect()->route('admin.users.index')->with('success', 'Active user changed successfully.');
    }

    public function ban($id)
    {
        User::where('id', $id)
            ->update(['is_banned' => true]);
        return redirect()->route('admin.users.index')->with('success', 'User banned successfully.');
    }

    public function unban($id)
    {
        User::where('id', $id)
            ->update(['is_banned' => false]);
        return redirect()->route('admin.users.index')->with('success', 'User unbanned successfully.');
    }
}
