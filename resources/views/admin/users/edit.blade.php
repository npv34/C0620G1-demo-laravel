@extends('layout-admin.master')
@section('title','Update User')

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Create user</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">users</a></li>
            <li class="breadcrumb-item active">edit</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i></div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ route('users.edit', $user->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" disabled value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label>Birthday</label>
                            <input type="date" class="form-control" name="birthday" value="{{ $user->birthday }}">
                        </div>
                        <div class="form-group">
                            <label>Group</label>
                            <select name="group_id" id="">
                                @foreach($groups as $group)
                                    <option
                                        @if($user->group_id == $group->id)
                                        selected
                                        @endif
                                        value="{{ $group->id }}">{{ $group->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            @foreach($roles as $role)
                                <div class="checkbox">
                                    <label>

                                        <input
                                            @foreach($user->roles as $roleUser)
                                            @if($roleUser->id == $role->id)
                                            checked
                                            @endif
                                            @endforeach
                                            type="checkbox" name="roles[{{ $role->id }}]"
                                            value="{{ $role->id }}">{{ $role->name }}</label>
                                </div>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
