<?php


namespace App\Http\Repositories;


use App\Models\Group;

class GroupRepository extends Repository
{
    protected $groupModel;
    function __construct(Group $group)
    {
        $this->groupModel = $group;
    }

}
