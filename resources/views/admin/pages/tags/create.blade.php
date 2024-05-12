@extends('admin.common.layout')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tags
                        <a href="{{route('tags.index')}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('tags.store')}}">
                        @csrf
                        <div class=" col-md-12 form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Role Name" name="name">
                            <label for="floatingInput">Tag Name</label>
                        </div>
                        <div class="col-md-12 mt-4">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="status">
                                <option>Active</option>
                                <option>InActive</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection