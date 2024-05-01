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
        <h4>CATEGORIES
            <a href="{{route('category.create')}}" class="btn btn-primary float-end">Add category</a>
        </h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            @foreach($category as $category)
            <tbody>
                <tr>
                    <td>{{ $category->id}}</td>
                    <td>{{ $category->name}}</td>
                    <td class="d-flex">
                        <a href="{{route('category.edit',[$category->id])}}" class="btn btn-success me-5">Edit</a>
                        <form method="post" action="{{route('category.destroy',[$category->id])}}">
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