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
                    <h4>Users
                        <a href="{{route('users.create')}}" class="btn btn-primary float-end">Add Users</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>IMAGE</th>
                                <th>EMAIL</th>
                                <th>COUNTRY</th>
                                <th>ADDRESS</th>
                                <th>PHONE</th>
                                <th>ROLES</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        @foreach($users as $user)
                        <tbody>
                            <tr>
                                <td>{{ $user->id}}</td>
                                <td>{{ $user->name}}</td>
                                <td>
                                    <img src="/storage/{{$user->image}}" height="50px" width="50px" class="img-fluid">
                                </td>
                                <td>{{ $user->email}}</td>
                                <td>{{ $user->country}}</td>
                                <td>{{ $user->address}}</td>
                                <td>{{ $user->phone}}</td>
                                <td>
                                    @foreach($user->getRoleNames() as $rolename)
                                    @if($rolename == 'Admin')
                                    <label class="badge bg-danger">{{$rolename}}</label>
                                    @elseif($rolename == 'Manager')
                                    <label class="badge bg-dark">{{$rolename}}</label>
                                    @elseif($rolename == 'User')
                                    <label class="badge bg-success">{{$rolename}}</label>
                                    @else
                                    <label class="badge bg-warning">{{$rolename}}</label>
                                    @endif
                                    @endforeach
                                </td>
                                <td class="d-flex">

                                    @can('update-user')
                                    <a href="{{route('users.edit',[$user->id])}}" class="btn btn-success me-2"><i class="fa-solid fa-pen"></i></a>
                                    @endcan

                                    @can('delete-user')

                                    <form method="post" action="{{route('users.destroy',[$user->id])}}">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
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