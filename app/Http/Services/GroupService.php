<?php


namespace App\Http\Services;


use App\Http\Repositories\GroupRepository;
use App\Models\Group;

class GroupService
{
    protected $groupRepo;
    function __construct(GroupRepository $groupRepo)
    {
        $this->groupRepo = $groupRepo;
    }

    function create($request) {
        $group = new Group();
        $group->fill($request->all());
        $this->groupRepo->store($group);
    }
}
