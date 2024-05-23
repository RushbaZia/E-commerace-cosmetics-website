@extends('admin.common.layout')
@section('content')
<div class="container">

    @if(session('delete'))
    <div class="alert alert-success mt-3">{{session('delete')}}</div>
    @endif


    <div class="card mt-3">
        <div class="card-header">
            <h4>Comment List
            </h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>AUTHOR</th>
                        <th>POST TITLE</th>
                        <th>MESSAGE</th>
                        <th>DATE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                @foreach($comment as $comment)
                <tbody>
                    <tr>
                        <td>{{ $comment->id}}</td>
                        <td>{{ $comment->name}}</td>
                        <td>
                            @if($comment->post)
                            @foreach($comment->post as $post)
                            {{ $post->title }}
                            @endforeach
                            @else
                            No posts available
                            @endif
                        </td>

                        <td>{{ $comment->message}}</td>
                        <td>{{ $comment->created_at->format('M m ,Y D H:i:s')}}</td>
                        <td>
                            <form method="post" action="{{route('comment.destroy', [ $comment->id])}}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" onclick="confirmation(event)"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>

            @if(Session::has('delete'))
            <script>
                swal('Are you Sure to Delete', "{{Session::get('delete')}}", 'error', {
                    button: true,
                    button: "OK",
                    dangerMode: true,
                });
            </script>
            @endif
        </div>
    </div>
</div>
@endsection