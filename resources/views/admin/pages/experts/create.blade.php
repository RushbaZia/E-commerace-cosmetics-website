@extends('admin.common.layout')
@section('content')
<div class="container">
    <h3 class="text-center pt-3">Add Experts Here
    </h3>
    <form method="POST" action="{{route('about.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="name">
            <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating mb-4">
            <textarea class="form-control" placeholder="Write about Yourself" id="floatingTextarea" name="details"></textarea>
            <label for="floatingTextarea">Description</label>
        </div>
        <div class="form-floating mb-4">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="experts">

                <option></option>
                <option>Makeup Artist</option>
                <option>Dermatologist</option>
                <option>Cosmetics Chemist</option>
                <option>Trichologist</option>
            </select>
            <label for="floatingSelect">Working as a</label>
        </div>
        <input type="file" class="form-control mb-3" name="image">
        <button class="btn btn-success">Save</button>
    </form>
</div>

@endsection