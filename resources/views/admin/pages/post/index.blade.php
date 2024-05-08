@extends('admin.common.layout')
@section('content')
<h1>All Posts
        <a href="{{route('post.create')}}" class=" btn btn-warning mb-2">
            <i class="fa-solid fa-plus"></i>&nbsp;ADD NEW
        </a>
    </h1>
<div class="container">
    @if(session('status'))
    <div class="alert alert-success mt-3">{{session('status')}}</div>
    @endif

    @if(session('delete'))
    <div class="alert alert-danger mt-3">{{session('delete')}}</div>
    @endif
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col" colspan="2" class="text-center">ACTIONS</th>

            </tr>

        </thead>
  
        <tbody style="border:2px solid black;">
            <tr>
                <td></td>
                <td></td>
                <td>
                    <a href="" class="btn btn-outline-success">
                        <i class="fa-solid fa-pen"></i>&nbsp;Edit</a>
                </td>
                <td>
                    <form method="post" action="">
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i>&nbsp;Delete</button>
                    </form>
                </td>

            </tr>
        </tbody>
     
    </table>
</div>
@endsection