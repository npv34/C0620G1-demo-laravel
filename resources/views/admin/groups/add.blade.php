@extends('layout-admin.master')
@section('title','Create Group')

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Create group</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('groups.index') }}">group</a></li>
            <li class="breadcrumb-item active">create</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i></div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        Tac vu bi loi
                    </div>
                @endif
                <div class="table-responsive">
                    <form action="{{route('groups.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input
                                type="text" class="form-control
                                 @if($errors->first('name'))
                                 border border-danger
                                 @endif
                                 " value="{{ old('name') }}" name="name" required>
                            @if($errors->first('name'))
                                <p class="text-danger" >{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
