@extends('admin.common.layout')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Price cards
                        <a href="" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('price.store')}}">
                        @csrf
                        <div class="form-floating mb-4">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="package">

                                <option></option>
                                <option>BASIC</option>
                                <option>STANDARD</option>
                                <option>PREMIUM</option>
                                <option>PLATINUM</option>
                            </select>
                            <label for="floatingSelect">Package</label>
                        </div>

                        <div class=" col-md-12 form-floating">
                            <input type="number" class="form-control" id="floatingInput" placeholder="Price" name="price">
                            <label for="floatingInput">Package Price</label>
                        </div>
                        <div class=" col-md-12 form-floating">
                            <div class="form-floating mb-3 w-100">
                                <p>Select Services:</p>
                                <select class="js-example-basic-multiple form-select" name="services" multiple="multiple">
                                   
                                    <option>Hair Trimming</option>
                                    <option>Scalp massage</option>
                                    <option>Complete hair makeover</option>

                                    <option>Facial</option>
                                    <option>Customized facial</option>
                                    <option>VIP facial </option>

                                    <option>Light touch-up</option>
                                    <option>Event makeup</option>
                                    <option>Makeup with airbrushing</option>

                                    <option>Cleansing</option>
                                    <option>Deep cleansing</option>
                                    <option>Microdermabrasion</option>
                                </select>
                            </div>
                        </div><br>
                        <div class="mt-3">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection