<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function update(Request $request, $id)
    {
        dd($request);
        $user = User::where('name', Auth::user()->name)->firstOrFail();
        if (Hash::check($request->oldpassword, $user->password)) {
            if($request->password1 == $request->password2) {
                User::where('id', $id)
                    ->update(['name' => $request->name, 'email' => $request->email, 'password' => Hash::make($request->password1)]);
                Storage::delete('public/users/'.$id.'/avatar.jpg');
                $request->file('image')->storeAs('public/users/'.$id, 'avatar.jpg');

            }
        }
        else
            {
            //dodelat proverku
            }
        return redirect()->route('account');
    }
}
