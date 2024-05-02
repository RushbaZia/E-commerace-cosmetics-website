@extends('admin.common.layout')
@section('content')

<h3 class="text-center pt-3">Add your Products
</h3>

<div class="container pt-3">
    <form class="row g-3" method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="col-12 mb-4">
            <div class="input-group">
                <div class="input-group-text">
                    <i class="fa-solid fa-gifts"></i>&nbsp;&nbsp;
                    <label for="autoSizingInputGroup"><b>Name:</b></label>
                </div>
                <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Product Name" name="name">
            </div>
            <span class="text-danger">
                @error('name')
                <i class="fa-solid fa-circle-info"></i> {{$message}}
                @enderror
            </span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="fa-solid fa-coins"></i>&nbsp;&nbsp;
                            <label for="autoSizingInputGroup"><b>Quantity:</b></label>
                        </div>
                        <input type="number" class="form-control" id="autoSizingInputGroup" placeholder="Product Quantity" name="quantity">
                    </div>
                    <span class="text-danger">
                        @error('quantity')
                        <i class="fa-solid fa-circle-info"></i> {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="col-6">
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="fa-solid fa-weight-scale"></i>&nbsp;&nbsp;
                            <label for="autoSizingInputGroup"><b>Category:</b></label>
                        </div>
                        <select class="js-example-basic-multiple form-select" name="category_id[]" multiple="multiple">
                            @foreach($category as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <span class="text-danger">
                        @error('size')
                        <i class="fa-solid fa-circle-info"></i> {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="input-group">
                <div class="input-group-text">
                    <i class="fa-solid fa-dollar-sign"></i>&nbsp;&nbsp;
                    <label for="autoSizingInputGroup"><b>Price:</b></label>
                </div>
                <input type="number" class="form-control" id="autoSizingInputGroup" placeholder="Product Price" name="price">

            </div>
            <span class="text-danger">.
                @error('price')
                <i class="fa-solid fa-circle-info alert-danger"></i> {{$message}}
                @enderror
            </span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="fa-solid fa-circle-info"></i>&nbsp;&nbsp;
                            <label for="autoSizingInputGroup"><b>Details:</b></label>
                        </div>
                        <textarea type="textarea" class="form-control" placeholder="Product Details" name="details"></textarea>
                    </div>
                    <span class="text-danger">
                        @error('details')
                        <i class="fa-solid fa-circle-info"></i> {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="col-3 mt-2">
                    <!-- <label>Upload File/Image</label> -->
                    <input type="file" class="form-control" name="image">
                    <span class="text-danger">
                        @error('image')
                        <i class="fa-solid fa-circle-info"></i> {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
        </div>
        <button class=" btn btn-success">Add Product</button>

    </form>
</div>
@endsection