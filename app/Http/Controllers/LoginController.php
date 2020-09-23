<?php

namespace App\Http\Controllers;

use App\Http\Services\LoginService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    protected $loginService;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    public function showFormLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if (!$this->loginService->login($request)) {
            return redirect()->back();
        }

        return redirect()->route('admin.dashboard');
    }
}
