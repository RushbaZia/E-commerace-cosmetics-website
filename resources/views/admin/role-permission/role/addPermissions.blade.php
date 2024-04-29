@extends('admin.common.layout')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
            <div class="alert alert-success">{{session('status')}}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Roles:{{ $role->name}}
                        <a href="{{route('roles.index')}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{route('roles.givePermissions', $role->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <h4 class="text-danger"><u>Permissions:</u></h4>

                            <div class=" col-md-12">
                                <div class="row">
                                    @foreach($permissions as $permission)
                                    <div class="col-md-2">
                                        <label>
                                            <input type="checkbox" name="permission[]" value="{{old ('permission',$permission->name )}}" 
                                            {{  in_array ($permission->id,$rolePermissions)? 'checked' : ''}}>
                                            {{$permission->name}}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection