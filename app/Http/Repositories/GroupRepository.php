<?php


namespace App\Http\Repositories;


use App\Models\Group;

class GroupRepository
{
    protected $groupModel;
    function __construct(Group $group)
    {
        $this->groupModel = $group;
    }
}
