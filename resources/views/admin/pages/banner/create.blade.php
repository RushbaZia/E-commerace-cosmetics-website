@extends('admin.common.layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h4> Add Banner here
            <a href="{{route('banner.index')}}" class="btn btn-danger float-end">Back</a>
        </h4>
    </div>
    <div class="card-body">
        <form method="POST" Action="{{route('banner.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="col-3 mt-2">
                <!-- <label>Upload File/Image</label> -->
                <input type="file" class="form-control" name="image">
            </div>
            <div class="mt-3">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection