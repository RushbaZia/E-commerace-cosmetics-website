@extends('admin.common.layout')
@section('content')
<div class="container">

    @if(session('status'))
    <div class="alert alert-success mt-3">{{session('status')}}</div>
    @endif
    @if(session('delete'))
    <div class="alert alert-danger mt-3">{{session('delete')}}</div>
    @endif

    <div class="card mt-3">
        <div class="card-header">
            <h4>Tags
                <a href="{{route('tags.create')}}" class="btn btn-primary float-end">Add Tags</a>
            </h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                @foreach($tag as $tag)
                <tbody>
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td><label class="badge bg-primary">{{$tag->status}}</label></td>
                        <td class="d-flex">

                            <a href="{{route('tags.edit', [$tag->id])}}" class="btn btn-success me-5"> <i class="fa-solid fa-pen"></i></a>
                            <form method="post" action="{{route('tags.destroy', [$tag->id])}}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection