@extends('admin.common.layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h4> Edit Banner here
            <a href="{{route('banner.index')}}" class="btn btn-danger float-end">Back</a>
        </h4>
    </div>
    <div class="card-body">
        <form method="POST" Action="{{route('banner.update',[$banner->id])}}"  enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="col-3 mt-2">
                <!-- <label>Upload File/Image</label> -->
                <input type="file" class="form-control" name="image" value="{{old('image',$banner->image)}}">
            </div>
            <div class="mt-3">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection