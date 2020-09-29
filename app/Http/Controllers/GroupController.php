<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGroupRequest;
use App\Http\Services\GroupService;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    protected $groupService;
    function __construct(GroupService $groupService){
        $this->groupService = $groupService;
    }
    public function index()
    {
        $groups = Group::all();
        return view('admin.groups.list', compact('groups'));
    }

    function create(){
        return view('admin.groups.add');
    }

    function store(CreateGroupRequest $request){
        $this->groupService->create($request);
        return redirect()->route('groups.index');
    }

    function delete($id) {
        $group = Group::findOrFail($id);
        $group->delete();
        return redirect()->route('groups.index');
    }

    function getUserOfGroup($groupId) {
        $group = Group::findOrFail($groupId);
        $users = $group->users;
        dd($users);
    }

}
