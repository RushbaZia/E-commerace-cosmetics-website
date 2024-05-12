<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pretty-Gurls</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{asset('client/images/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('client/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('client/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('client/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('client/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('client/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('client/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">

    <style>
        body {

            background-color: #eee;
        }

        .container {
            width: 900px;
        }

        .card {

            background-color: #fff;
            border: none;
            border-radius: 10px;
            width: 190px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }

        .image-container {

            position: relative;
        }

        .thumbnail-image {
            border-radius: 10px !important;
        }


        .discount {

            background-color: red;
            padding-top: 1px;
            padding-bottom: 1px;
            padding-left: 4px;
            padding-right: 4px;
            font-size: 10px;
            border-radius: 6px;
            color: #fff;
        }

        .wishlist {

            height: 25px;
            width: 25px;
            background-color: #eee;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .first {

            position: absolute;
            width: 100%;
            padding: 9px;
        }


        .dress-name {
            font-size: 13px;
            font-weight: bold;
            width: 75%;
        }


        .new-price {
            font-size: 13px;
            font-weight: bold;
            color: red;

        }

        .old-price {
            font-size: 8px;
            font-weight: bold;
            color: grey;
        }


        .btn {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            padding: 3px;
        }

        .creme {
            background-color: #fff;
            border: 2px solid grey;


        }

        .creme:hover {
            border: 3px solid grey;
        }

        .creme:focus {
            background-color: grey;

        }


        .red {
            background-color: #fff;
            border: 2px solid red;

        }


        .red:hover {
            border: 3px solid red;
        }

        .red:focus {
            background-color: red;
        }



        .blue {
            background-color: #fff;
            border: 2px solid #40C4FF;
        }

        .blue:hover {
            border: 3px solid #40C4FF;
        }

        .blue:focus {
            background-color: #40C4FF;
        }

        .darkblue {
            background-color: #fff;
            border: 2px solid #01579B;
        }

        .darkblue:hover {
            border: 3px solid #01579B;
        }

        .darkblue:focus {
            background-color: #01579B;
        }

        .yellow {
            background-color: #fff;
            border: 2px solid #FFCA28;
        }

        .yellow:hover {
            border-radius: 3px solid #FFCA28;
        }

        .yellow:focus {
            background-color: #FFCA28;
        }


        .item-size {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background: #fff;
            border: 1px solid grey;
            color: grey;
            font-size: 10px;
            text-align: center;
            align-items: center;
            display: flex;
            justify-content: center;
        }


        .rating-star {
            font-size: 10px !important;
        }

        .rating-number {
            font-size: 10px;
            color: grey;

        }

        .buy {
            font-size: 12px;
            color: purple;
            font-weight: 500;
        }

        .voutchers {
            background-color: #fff;
            border: none;
            border-radius: 10px;
            width: 190px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            overflow: hidden;

        }

        .voutcher-divider {

            display: flex;

        }

        .voutcher-left {
            width: 60%
        }

        .voutcher-name {
            color: grey;
            font-size: 9px;
            font-weight: 500;
        }

        .voutcher-code {
            color: red;
            font-size: 11px;
            font-weight: bold;
        }

        .voutcher-right {
            width: 40%;
            background-color: purple;
            color: #fff;
        }

        .discount-percent {
            font-size: 12px;
            font-weight: bold;
            position: relative;
            top: 5px;
        }

        .off {
            font-size: 14px;
            position: relative;
            bottom: 5px;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    @include('client.common.navbar')

    <!-- SECTIONS -->
    <div class="container mt-5 mb-5">
        <div class="row ">
            @foreach($products as $product)
            <div class="col-md-3 mb-5">
                <div class="card">
                    <div class="image-container">
                        <div class="first">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="discount">-25%</span>
                                <span class="wishlist"><i class="fa fa-heart-o"></i></span>
                            </div>
                        </div>
                        <img src="/storage/{{$product->image}}" class="img-fluid rounded thumbnail-image">
                    </div>
                    <div class="product-detail-container p-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="dress-name">{{$product->name}}</h5>
                            <div class="d-flex flex-column mb-2">
                                <span class="new-price">${{$product->price}}</span>
                                <small class="old-price text-right">Left: {{$product->quantity}} </small>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center pt-1">
                            <div>{{$product->details}} </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center pt-1">
                            <div>
                                <i class="fa fa-star-o rating-star"></i>
                                <span class="rating-number">4.8</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <center> <button class="loadMore" style="border:2px solid skyblue; background-color:aquamarine; cursor:pointer;"onclick="loadData()"><b>More Products</b><span class="spinner-border spinner-border-sm text-primary ms-3"></span></button></center>
    </div>


    <!-- FOOTER -->
    @include('client.common.footer')


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>


    <script src="{{ asset('client/js/jquery.min.js')}}"></script>
    <!-- <script>
        $(".col-md-3").slice(0, 4).show();
        $(".loadMore").on("click", function() {

            $(".col-md-3:hidden").slice(0, 4).show();
            if ($(".col-md-3:hidden").length == 0) {
                $(".loadMore").fadeOut();
            }
        })
    </script> -->
    <script
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script src="{{ asset('client/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('client/js/popper.min.js') }}"></script>

    <script src="{{ asset('client/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('client/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('client/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('client/js/aos.js') }}"></script>
    <script src="{{ asset('client/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('client/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('client/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('client/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('client/js/google-map.js') }}"></script>
    <script src="{{ asset('client/js/main.js') }}"></script>

</body>

</html>