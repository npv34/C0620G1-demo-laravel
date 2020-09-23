<?php


namespace App\Http\Services;


use App\Http\Repositories\LoginRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginService
{
    protected $loginRepo;
    function __construct(LoginRepository $loginRepo)
    {
        $this->loginRepo = $loginRepo;
    }

    function login($request) {
        $email = $request->email;
        $password = $request->password;

        $data = [
            'username' => $email,
            'password' => $password
        ];

        return $this->loginRepo->checkLogin($data);
    }
}
