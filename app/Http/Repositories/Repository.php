<?php


namespace App\Http\Repositories;


class Repository
{
    function store($object) {
        $object->save();
    }
}
