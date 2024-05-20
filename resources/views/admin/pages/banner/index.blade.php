@extends('admin.common.layout')
@section('content')

@if(session('status'))
<div class="alert alert-success mt-3">{{session('status')}}</div>
@endif
@if(session('delete'))
<div class="alert alert-danger mt-3">{{session('delete')}}</div>
@endif

<div class="card mt-3">
    <div class="card-header">
        <h4>BANNERS
            <a href="{{route('banner.create')}}" class="btn btn-primary float-end">Add Banner</a>
        </h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>IMAGE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            @foreach($banner as $banner)
            <tbody>
                <tr>
                    <td>{{ $banner->id}}</td>
                    <td>
                    <img src="/storage/{{$banner->image}}" height="50px" width="50px" class="img-fluid">
                </td>
                    <td class="d-flex">
                        <a href="{{route('banner.edit',[$banner->id])}}" class="btn btn-success me-5">Edit</a>
                        <form method="post" action="{{route('banner.destroy',[$banner->id])}}">
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
@endsection