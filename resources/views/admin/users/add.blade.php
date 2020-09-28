@extends('layout-admin.master')
@section('title','Create User')

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Create user</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">users</a></li>
            <li class="breadcrumb-item active">create</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i></div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ route('users.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label>Birthday</label>
                            <input type="datetime-local" class="form-control" name="birthday">
                        </div>
                        <div class="form-group">
                            <label>Group</label>
                            <select name="group_id" id="">
                                @foreach($groups as $group)
                                <option value="{{ $group->id }}">{{ $group->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            @foreach($roles as $role)
                            <div class="checkbox">
                                <label><input type="checkbox" name="roles[{{ $role->id }}]" value="{{ $role->id }}">{{ $role->name }}</label>
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
