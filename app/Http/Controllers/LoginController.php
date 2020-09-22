<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showFormLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $data = [
            'username' => $email,
            'password' => $password
        ];
        if (!Auth::attempt($data)) {
            Session::flash('login-error', 'Tai khoan or mat khau khong dung');
            return back();
        }

            dd($request->all());
    }
}
