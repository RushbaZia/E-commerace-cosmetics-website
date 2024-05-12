@extends('admin.common.layout')
@section('content')

<div class="card">
    <div class="card-body">
        <h5 class="card-title">New Blog Post</h5>
        <!-- Quill Editor Full -->
        <form method="POST" ACTION="{{route('posts.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="Post Title" class="form-label">Title</label>
                <input type="text" class="form-control" id="Post Title" placeholder="Enter Title" name="title">
            </div>
            <div class="mb-3">
                <label for="Post Content" class="form-label">Quote</label>
                
                    <textarea class="form-control" id="Post Content" name="content"></textarea>
            
            </div>
            <div class="mb-3">
                <label for="Post Author" class="form-label">Author</label>
                <input type="text" class="form-control" id="Post Author" placeholder="Enter Title" name="author">
            </div>

            <div class="mb-3">
                <label for="Post Category" class="form-label">Category</label>
                <select class="js-example-basic-multiple form-select" name="category" multiple="multiple">
                    <option value="">o</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="Post Tags" class="form-label">Tags</label>
                <select class="js-example-basic-multiple form-select" name="tag" multiple="multiple">
                    <option value="">tg</option>
                
                </select>
            </div>
            <div class="mb-3">
            <input type="file" class="form-control" name="image">
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Create</button>
                <button type="reset" class="btn btn-danger">Clear</button>
            </div>

        </form>

        <!-- End Quill Editor Full -->
    </div>
</div>
@endsection
