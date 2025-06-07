@extends('client.common.layout')

@section('hero')
<div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('storage/upload/Hero_img.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <div class="icon">
                    <a href="index.html" class="logo">
                        <span class="flaticon-flower"></span>
                        <h1>Pretty Gurls</h1>
                    </a>
                </div>
                <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Checkout</h1>
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> <span>Checkout</span></p>
            </div>
        </div>
    </div>
</div>
@endsection
@if(session('delete'))
<div class="alert alert-danger mt-3">{{session('delete')}}</div>
@endif
@section('content')
<div class="container mt-5 mb-5">
    <form class="needs-validation" method="POST" action="{{route('checkout.store')}}" novalidate>
        @csrf
        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Order Details</span>
                    <span class="badge bg-primary rounded-pill">{{ count((array) session('cart')) }} <i class="fa fa-shopping-cart "></i></span>
                </h4>
                <table class="table">
                    <thead>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                    </thead>
                    @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                    <tbody>
                        <tr>
                            <td><img src="/storage/{{ $details['image'] }}" height="60px" width="70px"></td>
                            <td>{{ $details['name'] }}</td>
                            <td>{{ $details['quantity'] }}</td>
                            <td> ${{ $details['price'] }}</td>
                        </tr>
                        <tr>
                            @php $total = 0 @endphp
                            @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                            @endforeach
                            <hr>
                        </tr>
                    </tbody>
                    @endforeach
                    <td colspan="3">
                        <h4>Total: <span class="text-info">$ {{ $total }}</h3>
                                <input type="hidden" name="total" value="{{ $total }}">
                    </td>
                    @endif
                </table>

                <button class="w-100 btn btn-primary btn-lg" type="submit">Place Order</button>
            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Billing address</h4>
                <div class="row g-3">
                    @foreach($user as $item)
                    <input type="hidden" value="{{$item->id}}" class="form-control" name="user_id">
                    @endforeach
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
                <h4 class="mb-3">Payment</h4>
                <div class="my-3">
                    <div class="">
                        <input id="payment_method_one" name="paymentMethod" type="radio" value="cod" class="form-check-input" checked required>
                        <label class="form-check-label" for="payment_method_one">Cash On Delivery</label>
                    </div>
                    <div class="">
                        <input id="payment_method_two" name="paymentMethod" type="radio" value="stripe" class="form-check-input">
                        <!-- required onchange="if(this.checked){window.location.href='http://127.0.0.1:8000/stripe'}" -->
                        <label class="form-check-label" for="payment_method_two">Stripe</label>
                    </div>
                </div>

                <hr class="my-4">
            </div>
        </div>
    </form>
</div>
</section>
@if(session()->has('tracking') && session()->has('status'))
<script>
    swal({
        title: "Order Placed!",
        text: "Tracking #: {{ Session::get('tracking') }}",
        icon: "success",
        buttons: {
            order: {
                text: "Order Details",
                value: "order",
                timer: 3000,
                className: "btn btn-primary",
            },
            checkout: {
                text: "Back to Checkout",
                value: "checkout",
                timer: 3000,
                className: "btn btn-secondary",
            }
        }
    }).then((value) => {
        switch (value) {
            case "order":
                window.location.href = "{{ route('adminDashboard') }}";
                break;
            case "checkout":
                window.location.href = "{{ route('checkout.create') }}";
                break;
        }
    });
</script>
@endif
@endsection