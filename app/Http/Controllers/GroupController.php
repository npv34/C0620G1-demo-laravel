<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    protected $users;
    function __construct(){
        $this->users = [
            1 => [
                'id' => 1,
                'name' => 'C0620G1'
            ],
            2 => [
                'id' => 2,
                'name' => 'C0820G2'
            ],
            3 => [
                'id' => 3,
                'name' => 'C0620G3'
            ]
        ];
    }
    public function index()
    {
        $users = $this->users;
        print_r($this->users);
        return view('admin.groups.list', compact('users'));
    }

    function detail($id)
    {
        if (array_key_exists($id, $this->users)) {
            $user = $this->users[$id];
            return view('admin.groups.detail', compact('user'));

        } else {
            abort(404);
        }
    }

    function create(){

    }

    function store(){
        return redirect()->route('groups.index');
    }

    function delete($id) {
        if (array_key_exists($id, $this->users)) {
            array_splice($this->users, $id, 1);
            return redirect()->route('groups.index');
        } else {
            abort(404);
        }
    }
}
