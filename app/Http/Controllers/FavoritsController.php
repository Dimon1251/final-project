<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritsController extends Controller
{
    public function show() {
        return view('user.favorites');
    }
}
