<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::guard('user')->attempt($credentials)) {
            return redirect()->intended(url('index'));
        }else {
            toastr()->error('Wrong Credentials','Error');
            return redirect()->back()->withInput();
        }
    }

    public function logout()
    {
        Auth::guard('user')->logout();
        return view('login.login');
    }
}
