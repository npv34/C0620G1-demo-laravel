<?php


namespace App\Http\Repositories;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginRepository
{
    function checkLogin($data) {
        return Auth::attempt($data);
    }
}
