@extends('admin.common.layout')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>User
                        <a href="{{route('users.index')}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('users.store')}}">
                        @csrf

                        <div class=" col-md-12 form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="name">
                            <label for="floatingInput">Name</label>
                        </div><br>
                        <div class=" col-md-12 form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email">
                            <label for="floatingInput">Email</label>
                        </div><br>
                        <div class=" col-md-12 form-floating">
                            <input type="password" class="form-control" id="floatingInput" placeholder="password" name="password">
                            <label for="floatingInput">Password</label>
                        </div><br>

                        <div class=" col-md-12 form-floating">
                            <div class="form-floating mb-3 w-100">
                                <p>Select Roles</p>
                                <select class="js-example-basic-multiple form-select" name="roles[]" multiple="multiple">
                                    @foreach($roles as $role)
                                    <option value="{{$role->name}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><br>



                        <div class="mt-3">
                            <button class="btn btn-primary" type="submit">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection