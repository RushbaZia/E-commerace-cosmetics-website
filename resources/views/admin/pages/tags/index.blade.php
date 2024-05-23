@extends('admin.common.layout')
@section('content')
<div class="container">

    @if(session('status'))
    <div class="alert alert-success mt-3">{{session('status')}}</div>
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
                        <td>
                            @if($tag->status == 'Active')
                            <label class="badge bg-success">{{$tag->status}}</label>
                            @elseif($tag->status == 'InActive')
                            <label class="badge bg-danger">{{$tag->status}}</label>
                            @else
                            <label class="badge bg-primary">{{$tag->status}}</label>
                            @endif
                        </td>
                        <td class="d-flex">

                            <a href="{{route('tags.edit', [$tag->id])}}" class="btn btn-success me-5"> <i class="fa-solid fa-pen"></i></a>
                            <form method="post" action="{{route('tags.destroy', [$tag->id])}}">
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