<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function getAll()
    {
        try {
            $users = User::all();
            return response()->json($users);/**/
        }catch (\Exception $exception){
            $data = [
                'status' => 'errors',
                'message' => 'He thong dang loi'
            ];
            return response()->json($data);/**/
        }

    }

    function store(Request $request) {
        $user = new User();
        $user->fill($request->all());
        $user->username = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->roles()->sync($request->roles);
    }
}
