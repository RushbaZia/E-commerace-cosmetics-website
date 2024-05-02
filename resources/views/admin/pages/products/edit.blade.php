@extends('admin.common.layout')
@section('content')

<h3 class="text-center pt-3">Edit Your Product</h3>
<div class="container pt-3">
    <form class="row g-3" method="post" action="{{route('products.update', [$product->id] )}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-12 mb-4">
            <div class="input-group">
                <div class="input-group-text">
                    <i class="fa-solid fa-gifts"></i>&nbsp;&nbsp;
                    <label for="autoSizingInputGroup"><b>Name:</b></label>
                </div>
                <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Product Name" name="name" value="{{old('name',$product->name)}}">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="fa-solid fa-coins"></i>&nbsp;&nbsp;
                            <label for="autoSizingInputGroup"><b>Quantity:</b></label>
                        </div>
                        <input type="number" class="form-control" id="autoSizingInputGroup" placeholder="Product Quantity" name="quantity" value="{{old('quantity',$product->quantity)}}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="fa-solid fa-weight-scale"></i>&nbsp;&nbsp;
                            <label for="autoSizingInputGroup"><b>Category:</b></label>
                        </div>
                        <select class="js-example-basic-multiple form-select" name="categories[]" multiple="multiple">

                            @foreach($categories as $item)
                            <option value="{{$item->id}}" @if(in_array($item->id,$category))selected @endif>{{$item->name}}</option>
                            @endforeach

                           
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mb-3">
            <div class="input-group">
                <div class="input-group-text">
                    <i class="fa-solid fa-dollar-sign"></i>&nbsp;&nbsp;
                    <label for="autoSizingInputGroup"><b>Price:</b></label>
                </div>
                <input type="number" class="form-control" id="autoSizingInputGroup" placeholder="Product Price" name="price" value="{{old('price',$product->price)}}">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="fa-solid fa-circle-info"></i>&nbsp;&nbsp;
                            <label for="autoSizingInputGroup"><b>Details:</b></label>
                        </div>
                        <textarea type="textarea" class="form-control" placeholder="Product Details" name="details">{{old('details',$product->details)}}</textarea>
                    </div>
                </div>
                <div class="col-3 mt-2">
                    <input type="file" class="form-control" name="image" value="{{old('image',$product->image)}}">
                </div>
            </div>
        </div>
        <button class=" btn btn-success">Update Product</button>

    </form>
</div>

@endsection