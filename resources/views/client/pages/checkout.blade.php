@extends('client.common.layout')

@section('hero')
<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <div class="icon">
                    <a href="index.html" class="logo">
                        <span class="flaticon-flower"></span>
                        <h1>Pretty</h1>
                    </a>
                </div>
                <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Checkout</h1>
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checkout</span></p>
            </div>
        </div>
    </div>
</div>
@endsection
@if(session('delete'))
<div class="alert alert-success mt-3">{{session('delete')}}</div>
@endif
@section('content')
<div class="container mt-5 mb-5">
    <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">Your cart</span>
                <span class="badge bg-primary rounded-pill">{{ count((array) session('cart')) }}</span>
            </h4>
            <ul class="list-group mb-3">
                @if(session('cart'))
                @foreach(session('cart') as $id => $details)

                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <img src="/storage/{{ $details['image'] }}" height="60px" width="70px">

                    </div>
                    <h6 class="my-0">{{ $details['name'] }}</h6>
                    <span class="text-muted"> ${{ $details['price'] }}</span>
                </li>
                @endforeach
                @endif
                @php $total = 0 @endphp
                @foreach((array) session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                @endforeach
                <hr>
                <li class="list-group-item d-flex justify-content-between">
                    <h5>Total: <span class="text-info">$ {{ $total }}</span></h5>
                </li>
            </ul>
        </div>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" method="POST" action="{{route('checkout.store')}}" novalidate>
                @csrf
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="First Name" name="fname" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Sir Name" name="lname" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" name="password">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address1">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address2">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity" name="city">
                    </div>
                    <div class="col-md-6">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="number" class="form-control" id="inputZip" name="zip">
                    </div>
                </div>

                <hr class="my-4">

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="same-address">
                    <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
                </div>

                <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="save-info">
                    <label class="form-check-label" for="save-info">Save this information for next time</label>
                </div> -->

                <hr class="my-4">

                <h4 class="mb-3">Payment</h4>
                <div class="my-3">
                    <div class="">
                        <input id="payment_method_one" name="paymentMethod" type="radio" value="COD" class="form-check-input" checked required>
                        <label class="form-check-label" for="payment_method_one">Cash On Delivery</label>
                    </div>
                    <div class="">
                        <input id="payment_method_two" name="paymentMethod" type="radio" value="stripe" class="form-check-input" required>
                        <label class="form-check-label" for="payment_method_two">Stripe</label>
                    </div>
                </div>

                <div class="row gy-3 d-none mt-3" id="card_payment_form">

                    <div class="col-md-12">
                        <label for="cc-number" class="form-label">Card number</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="Valid Card Number" name="cardNumber" required>
                        <div class="invalid-feedback">
                            Credit card number is required
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="cc-expiration" class="form-label">Expiration</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="MM/YYYY" name="expiryDate" required>
                        <div class="invalid-feedback">
                            Expiration date required
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="cc-cvv" class="form-label">CVV</label>
                        <input type="number" class="form-control" id="cc-cvv" placeholder="123" name="cvv" required>
                        <div class="invalid-feedback">
                            Security code required
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
            </form>
        </div>
    </div>
</div>
</section>
@endsection
@section('paymentJs')
<script>
    $("#payment_method_one").click(function() {
        if ($(this).is(":checked") == true) {
            // console.log('im checked');
            // $("#card_payment_form").addClass('d-none');
        }
    });
    $("#payment_method_two").click(function() {
        if ($(this).is(":checked") == true) {
            $("#card_payment_form").addClass('d-block');
        }
    });
</script>
@endsection