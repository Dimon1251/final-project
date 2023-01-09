<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\EditUserRequest;
use App\Mail\changePassword;
use App\Models\Category;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    public function show()
    {
        $orders = Transaction::where('user_email', Auth::user()->email)->get();
        $categories = Category::all();
        $user = User::where('name', Auth::user()->name )->firstOrFail();
        return view("user.account", ['categories' => $categories, 'user' => $user, 'orders' => $orders]);
    }

    public function update(EditUserRequest $request, $id)
    {
        if($request->email != Auth::user()->email){
            $request->validate([
                'email' => 'required|unique:users|min:3|max:255',
            ]);
        }
        User::where('id', $id)
            ->update(['name' => $request->name, 'email' => $request->email]);
        if($request->image != '') {
            Storage::delete('public/users/' . $id . '/avatar.jpg');
            $request->file('image')->storeAs('public/users/' . $id, 'avatar.jpg');
        }
        return redirect()->route('account')->with('success', 'Account data changed successfully.');
    }

    public function passwordUpdate(ChangePasswordRequest $request, $id)
    {
        $user = User::where('name', Auth::user()->name)->firstOrFail();
        if (Hash::check($request->oldpassword, $user->password)) {
            if($request->password1 == $request->password2) {
                User::where('id', $id)
                    ->update(['password' => Hash::make($request->password1)]);
            }
        }
        else
        {
            return redirect()->route('account')->with('error', 'Incorrect current password');
        }
        Mail::to($user->email)->send(new changePassword($user));
        return redirect()->route('account')->with('success', 'Password changed successfully.');
    }
}
