@extends('admin.common.layout')
@section('create')

<main id="main" class="main">
    <h1 class="text-center border border-4 border-dark bg-warning">Product Details</h1>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="{{$product->image}}" alt="profile" width="200px" height="200px">
            </div>
            <div class="col-8 pt-4">
                <h1>{{$product->name}}</h1>
                <h5>User Id: <span style="color:crimson;">{{$product->id}}</span></h5>
            </div>
        </div>
        <div class="container pt-5">
            <main class="row">
                <div class="col-12">
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="fa-solid fa-gifts"></i>&nbsp;&nbsp;
                            <label for="autoSizingInputGroup"><b>Name:</b></label>
                        </div>
                        <input type="text" class="form-control" id="autoSizingInputGroup" value="{{$product->name}}" name="name">
                    </div>
                </div><br><br><br>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group">
                                <div class="input-group-text">
                                    <i class="fa-solid fa-coins"></i>&nbsp;&nbsp;
                                    <label for="autoSizingInputGroup"><b>Quantity:</b></label>
                                </div>
                                <input type="number" class="form-control" id="autoSizingInputGroup" value="{{$product->quantity}}" name="quantity">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group">
                                <div class="input-group-text">
                                    <i class="fa-solid fa-weight-scale"></i>&nbsp;&nbsp;
                                    <label for="autoSizingInputGroup"><b>Size:</b></label>
                                </div>
                                <input type="number" class="form-control" id="autoSizingInputGroup" value="{{$product->size}}" name="size">
                            </div>
                        </div>
                    </div><br><br>
                </div>
                <div class="col-12">
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="fa-solid fa-dollar-sign"></i>&nbsp;&nbsp;
                            <label for="autoSizingInputGroup"><b>Price:</b></label>
                        </div>
                        <input type="text" class="form-control" id="autoSizingInputGroup" value="{{$product->price}}" name="price">
                    </div>
                </div><br><br><br>
                <div class="container">
                    <div class="row">
                        <div class="col-9">
                            <div class="input-group">
                                <div class="input-group-text">
                                    <i class="fa-solid fa-circle-info"></i>&nbsp;&nbsp;
                                    <label for="autoSizingInputGroup"><b>Details:</b></label>
                                </div>
                                <textarea type="textarea" class="form-control" value="{{$product->price}}" name="details"></textarea>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <!-- <label>Upload File/Image</label> -->
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</main>
@endsection