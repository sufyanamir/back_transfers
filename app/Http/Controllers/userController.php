<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function register(Request $request)
    {
        $validatedate = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|',
            'phone' => 'required',
            'password' => 'required|string|min:8',

        ]);
    }
}
