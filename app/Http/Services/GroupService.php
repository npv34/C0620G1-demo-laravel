<?php


namespace App\Http\Services;


use App\Http\Repositories\GroupRepository;

class GroupService
{
    protected $groupRepo;
    function __construct(GroupRepository $groupRepo)
    {
        $this->groupRepo = $groupRepo;
    }
}
