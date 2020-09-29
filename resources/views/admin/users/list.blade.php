@extends('layout-admin.master')
@section('title','Users')
@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">users</a></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i></div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Group</th>
                            <th>Role</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Group</th>
                            <th>Role</th>
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @forelse($users as $key => $user)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->username }}</td>
                                <td>
                                    @if($user->group)
                                        {{ $user->group->name }}
                                    @else
                                        No data
                                    @endif
                                </td>
                                <td>
                                    @forelse($user->roles as $role)
                                        {{ $role->name }}
                                    @empty
                                        No data
                                    @endforelse
                                </td>
                                <td><a class="btn btn-danger" href="{{ route('users.delete', $user->id) }}">Delete</a>
                                <a class="btn btn-primary" href="{{ route('users.update', $user->id) }}">Update</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">No data</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
