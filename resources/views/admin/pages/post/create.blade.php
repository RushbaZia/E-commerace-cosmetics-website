@extends('admin.common.layout')
@section('content')

<div class="card">
    <div class="card-body">
        <h5 class="card-title">New Blog Post</h5>
        <!-- Quill Editor Full -->
        <form method="POST" ACTION="">
            @csrf
            <div class="mb-3">
                <label for="Post Title" class="form-label">Title</label>
                <input type="text" class="form-control" id="Post Title" placeholder="Enter Title" name="title">
            </div>
            <div class="mb-3">
                <label for="Post Content" class="form-label">Quote</label>
                <div class="quill-editor-full ">
                    <textarea class="form-control" id="Post Content" name="content"></textarea>
                </div>
            </div>
            <div class="mb-3">
                <label for="Post Author" class="form-label">Author</label>
                <input type="text" class="form-control" id="Post Author" placeholder="Enter Title" name="author">
            </div>
            <div class="mb-3">
            <input type="file" class="form-control" name="image">
            </div>
            <div class="mt-4">
                <button type="reset" class="btn btn-danger">Clear</button>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>

        </form>

        <!-- End Quill Editor Full -->
    </div>
</div>
@endsection