<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' =>'required | email',
            'password' =>'required',
        ]);
        if (auth()->attempt($request->only('email','password'))) {
            return redirect()->route('home');
        } else {
            return back()->with(['errorMsg' => 'user email and password doesnt match']);
        }
    }


    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }
}
