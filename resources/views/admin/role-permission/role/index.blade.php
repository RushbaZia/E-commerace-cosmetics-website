@extends('admin.common.layout')
@section('content')

<div class="container mt-2">
    <!-- <div>
        <a href="{{route('roles.index')}}" class="btn btn-success mx-2">Roles</a>
        <a href="{{route('permissions.index')}}" class="btn btn-warning mx-2">Permission</a>
        <a href="{{route('users.index')}}" class="btn btn-info">Users</a>
    </div> -->
    <div class="row">
        <div class="col-md-12">

            @if(session('status'))
            <div class="alert alert-success mt-3">{{session('status')}}</div>
            @endif
            @if(session('delete'))
            <div class="alert alert-danger mt-3">{{session('delete')}}</div>
            @endif

            <div class="card mt-3">
                <div class="card-header">
                    <h4>Roles
                        <a href="{{route('roles.create')}}" class="btn btn-primary float-end">Add Roles</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        @foreach($role as $role)
                        <tbody>
                            <tr>
                                <td>{{ $role->id}}</td>
                                <td>{{ $role->name}}</td>
                                <td class="d-flex">
                                    @can('update-permission')
                                    <a href="{{route('roles.givePermissions',[$role->id])}}" class="btn btn-success me-5">Add/Edit Role Permission</a>
                                    @endcan
                                    @can('update-role')
                                    <a href="{{route('roles.edit',[$role->id])}}" class="btn btn-success me-5">Edit</a>
                                    @endcan

                                    @can('delete-role')
                                    <form method="post" action="{{route('roles.destroy',[$role->id])}}">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                    @endcan
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection