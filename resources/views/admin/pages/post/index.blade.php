@extends('admin.common.layout')
@section('content')
<h1>All Posts
    <a href="{{route('posts.create')}}" class=" btn btn-warning mb-2">
        <i class="fa-solid fa-plus"></i>
    </a>
</h1>
<div class="container">
    @if(session('status'))
    <div class="alert alert-success mt-3">{{session('status')}}</div>
    @endif

    @if(session('delete'))
    <div class="alert alert-danger mt-3">{{session('delete')}}</div>
    @endif
    <table class="table table-warning table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">TITLE</th>
                <th scope="col">IMAGE</th>
                <th scope="col">CONTENT</th>
                <th scope="col">AUTHOR</th>
                <th scope="col">CATEGORY</th>
                <th scope="col">TAG</th>
                <th scope="col" colspan="2" class="text-center">ACTIONS</th>

            </tr>

        </thead>
        @foreach($post as $post)
        <tbody >
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td><img src="/storage/{{$post->image}}" height="50px" width="50px" class="img-fluid"></td>
                <td>{{$post->content}}</td>
                <td>{{$post->author}}</td>
                <td></td>
                <td></td>
                <td>
                    <a href="{{route('posts.edit',[$post->id])}}" class="btn btn-outline-success">
                        <i class="fa-solid fa-pen"></i></a>
                </td>
                <td>
                    <form method="post" action="{{route('posts.destroy',[$post->id])}}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>

            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection