@extends('admin.common.layout')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Tags</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('tags.update', [$tag->id])}}">
                        @csrf
                        @method('PUT')

                        <div class=" col-md-12 form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Role Name" name="name" value="{{old('name', $tag->name )}}">
                            <label for="floatingInput">Tag Name</label>
                        </div>
                        <div class="col-md-12 mt-4">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="status" value="{{old('status', $tag->status )}}">
                                <option>Active</option>
                                <option>InActive</option>
                            </select>
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