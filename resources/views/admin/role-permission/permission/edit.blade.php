@extends('admin.common.layout')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Permissions
                        <a href="{{route('permissions.index')}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('permissions.update', $permission->id)}}">
                        @csrf
                        @method('PUT')
                        <div class=" col-md-12 form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Permission Name" name="name" value="{{old('name', $permission->name )}}">
                            <label for="floatingInput">Permission Name</label>
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