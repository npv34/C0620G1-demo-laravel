@extends('layout-admin.master')
@section('title','Groups')
@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>.</div>
        </div>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example
                <input type="text" id="search-group">
                <ul id="list-group-search"></ul>
            </div>
            <div class="col-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-md-2">
                        <div class="checkbox">
                            <label><input type="checkbox" id="show-name" checked>Name</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" id="total-user" checked>Total user</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th class="group-name">Name</th>
                            <th class="total-user">Total user</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>STT</th>
                            <th class="group-name">Name</th>
                            <th class="total-user">Total user</th>
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @forelse($groups as $key => $group)
                            <tr class="item-group" id="group-{{$group->id}}">
                                <td>{{ $key + 1 }}</td>
                                <td class="group-name">{{ $group->name }}</td>
                                <td class="total-user">
                                    <a href="{{ route('groups.getUserOfGroup', $group->id) }}">{{ $group->users->count() }}</a>
                                </td>
                                <td><a class="btn btn-danger delete-group" data-id="{{ $group->id }}">Delete</a></td>
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
