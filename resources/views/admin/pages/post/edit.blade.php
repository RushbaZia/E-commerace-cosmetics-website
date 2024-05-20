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
                <input type="text" class="form-control" id="Post Title" placeholder="Enter Title" name="title" value="{{old('title', $post->title )}}">
            </div>
            <div class="mb-3">
                <label for="Post Content" class="form-label">Quote</label>

                <textarea class="form-control" id="Post Content" name="content"> {{old('content', $post->content )}}</textarea>

            </div>
            <div class="mb-3">
                <label for="Post Author" class="form-label">Author</label>
                <input type="text" class="form-control" id="Post Author" placeholder="Enter Title" name="author" value="{{old('author', $post->author)}}">
            </div>

            <div class="mb-3">
                <label for="Post Category" class="form-label">Category</label>
                <select class="js-example-basic-multiple form-select" name="category_id[]" multiple="multiple" value="{{old('category_id',$post->category)}}">

                    @foreach($categories as $item)
                    <option value="{{$item->id}}" @if(in_array($item->id,$category))selected @endif>
                        {{$item->name}}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="Post Tags" class="form-label">Tags</label>
                <select class="js-example-basic-multiple form-select" name="tag_id[]" multiple="multiple" value="{{old('tag_id',$post->tag)}}">

                    @foreach($tags as $item)
                    <option value="{{$item->id}}" @if(in_array($item->id,$tag))selected @endif>
                        {{$item->name}}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <input type="file" class="form-control" name="image">
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </form>

        <!-- End Quill Editor Full -->
    </div>
</div>
@endsection