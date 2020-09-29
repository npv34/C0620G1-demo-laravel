<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function create() {
        $groups = Group::all();
        $roles = Role::all();
        return view('admin.users.add', compact('groups','roles'));
    }

    function store(Request $request) {
        $user = new User();
        $user->fill($request->all());
        $user->username = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->roles()->sync($request->roles);
        return redirect()->route('users.index');
    }

    function index() {
        $users = User::all();
        return view('admin.users.list', compact('users'));
    }

    function delete($id)
    {
        $user = User::findOrFail($id);
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('users.index');
    }

    function update($id) {
        $user = User::findOrFail($id);
        $groups = Group::all();
        $roles = Role::all();
        return view('admin.users.edit', compact('roles','groups', 'user'));
    }

    function edit(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->fill($request->all());
        $user->save();
        $user->roles()->sync($request->roles);
        return redirect()->route('users.index');
    }
}
