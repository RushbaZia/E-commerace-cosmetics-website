@extends('admin.common.layout')
@section('content')
<div class="container">

    @if(session('delete'))
    <div class="alert alert-success mt-3">{{session('delete')}}</div>
    @endif


    <div class="card mt-3">
        <div class="card-header">
            <h4>User's Query List
            </h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>SUBJECT</th>
                        <th>MESSAGE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                @foreach($contact as $contact)
                <tbody>
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->subject}}</td>
                        <td>{{$contact->message}}</td>
                        <td>
                            <form method="post" action="{{route('contact.destroy', [$contact->id])}}">
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