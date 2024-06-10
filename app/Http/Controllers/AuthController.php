<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function checkLogin(Request $request)
    {
        if (
            !Auth::attempt([
                'email' => $request->email,
                'password' => $request->password
            ])
        ) {
            return redirect('/')->with('alert', 'Wrong Email or Password');
        } else {
            return redirect('/Home');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

