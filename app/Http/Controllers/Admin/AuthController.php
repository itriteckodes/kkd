<?php

namespace App\Http\Controllers\Admin;

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
        if (Auth::guard('admin')->attempt($credentials)) {
            toastr()->success('Logged In Successfully','Success');

            return redirect()->intended(route('admin.dashboard'));
        } else {
            toastr()->error('Wrong Credentials','Login Failed');
            return redirect()->back()->withInput();
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
