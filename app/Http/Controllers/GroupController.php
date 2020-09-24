<?php

namespace App\Http\Controllers;

use App\Http\Services\GroupService;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    protected $users;
    function __construct(GroupService $groupService){

    }
    public function index()
    {
        //$users = $this->users;
        return view('admin.groups.list');
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
            unset($this->users[$id]);
            print_r($this->users);
            return redirect()->route('groups.index');
        } else {
            abort(404);
        }
    }

    function showFormCreate(){
        return view('admin.groups.add');
    }
}
