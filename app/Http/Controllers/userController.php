<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\admindata;

class userController extends Controller
{

    public function register(Request $request)
    {
        try {

            $validatedData = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|',
                'password' => 'required|confirmed',
                'phoneNo' => 'required|string',

            ]);
            // dd($validatedData);
            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phoneNo' => $validatedData['phoneNo'],
                'password' => Hash::make($validatedData['password']),
            ]);
            session(['user_det' => [
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phoneNo' => $validatedData['phoneNo'],
            ]]);

            return response()->json(['success' => true, 'message' => 'Register successful', 'user' => $user], 201);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage(),], 500);
        }
    }

    public function login(Request  $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|',
            'password' => 'required',


        ]);
        $user = User::where('email',  $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $phone = $user->phoneNo;
            $name = $user->name;
            session(['user_det' => [
                'name' => $name,
                'email' => $validatedData['email'],
                'phoneNo' => $phone,
            ]]);
            return response()->json(['success' => true, 'message' => 'Register successful'], 201);
        } else {
            return response()->json(['success' => false, 'message' => 'Wrong credentials',], 500);
        }
    }

    public function logout(Request $request)
    {

        $request->session()->forget('user_det');
        $request->session()->regenerate();
        return redirect('/');
    }


    // get user data from user tables
    public function getUserDate()
    {
        $data = User::all();
        return view('admindashboard.users', ['data' => $data]);
    }


    // admin login


    public function adminlogin(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|',
            'password' => 'required',


        ]);
        $user = admindata::where('email', $request->email)->first();
        if ($user && hash::check($request->password, $user->password)) {
            session(['adminlogin' => [
                'email' => $validatedData['email']
            ]]);
            return  response()->json(['success' => true, 'message' => "Login  successfull"], 200);
        } else {
            return  response()->json(['success' => false, 'message' => "invalid credentials"], 500);
        }
    }
    public function Alogout(Request $request)
    {

        $request->session()->forget('adminlogin');
        $request->session()->regenerate();
        return redirect('/');
    }
}
