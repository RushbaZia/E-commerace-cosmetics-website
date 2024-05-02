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
            <div class="alert alert-success mt-2">{{session('status')}}</div>
            @endif

            @if(session('delete'))
            <div class="alert alert-danger mt-3">{{session('delete')}}</div>
            @endif

            <div class="card mt-3">
                <div class="card-header">
                    <h4>Permissions
                        <a href="{{route('permissions.create')}}" class="btn btn-primary float-end">Add Permissions</a>
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
                        @foreach($permission as $permission)
                        <tbody>
                            <tr>
                                <td>{{ $permission->id}}</td>
                                <td>{{ $permission->name}}</td>
                                <td>

                                    <a href="{{route('permissions.edit',[$permission->id])}}" class="btn btn-success">Edit</a>



                                    <form method="post" action="{{route('permissions.destroy',[$permission->id])}}" class="float-end">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>

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