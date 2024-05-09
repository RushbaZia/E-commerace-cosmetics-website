@extends('admin.common.layout')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Categories
                        <a href="{{route('category.index')}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('category.update', $category->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class=" col-md-12 form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Category Name" name="name" value="{{old('name', $category->name )}}">
                            <label for="floatingInput">Category Name</label>
                        </div>
                        <div class="col-3 mt-2">
                            <input type="file" class="form-control" name="image" value="{{old('image',$category->image)}}">
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