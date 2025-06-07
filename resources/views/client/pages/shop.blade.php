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
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
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
        .hero-wrap .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            /* semi-transparent black */
            z-index: 1;
        }

        .hero-wrap .text-center {
            position: relative;
            z-index: 2;
            color: rgb(255, 255, 255);
            /* make sure text is white or light */
        }

        .hero-wrap h1,
        .hero-wrap p,
        .hero-wrap a {
            color: rgb(255, 255, 255) !important;
        }

        .thumbnail {
            position: relative;
            padding: 0px;
            margin-bottom: 20px;
        }


        .thumbnail img {
            width: 80%;
        }

        .thumbnail .caption {
            margin: 7px;
        }

        .main-section {
            background-color: #F8F8F8;
        }

        .dropdown {
            float: right;
            padding-right: 30px;
        }

        .btn {
            border: 0px;
            margin: 10px 0px;
            box-shadow: none !important;
        }

        .dropdown .dropdown-menu {
            padding: 20px;
            top: 30px !important;
            width: 350px !important;
            left: -110px !important;
            box-shadow: 0px 5px 30px black;
        }

        .total-header-section {
            border-bottom: 1px solid #d2d2d2;
        }

        .total-section p {
            margin-bottom: 20px;
        }

        .cart-detail {
            padding: 15px 0px;
        }

        .cart-detail-img img {
            width: 100%;
            height: 100%;
            padding-left: 15px;
        }

        .cart-detail-product p {
            margin: 0px;
            color: #000;
            font-weight: 500;
        }

        .cart-detail .price {
            font-size: 12px;
            margin-right: 10px;
            font-weight: 500;
        }

        .cart-detail .count {
            color: #C2C2DC;
        }

        .checkout {
            border-top: 1px solid #d2d2d2;
            padding-top: 15px;
        }

        .checkout .btn-primary {
            border-radius: 50px;
            /* height: 50px; */
        }

        .dropdown-menu:before {
            content: " ";
            position: absolute;
            top: -20px;
            right: 50px;
            border: 10px solid transparent;
            border-bottom-color: #fff;
        }
    </style>

</head>

<body>

    <div class="hero-wrap js-fullheight" style="background-image: url('storage/upload/Hero_img.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%'}">
                    <div class="icon">
                        <a href="index.html" class="logo">
                            <span class="flaticon-flower"></span>
                            <h1>Pretty Gurls</h1>
                        </a>
                    </div>
                    <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Shop Now
                    </h1>
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <span>Shop</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- NAVBAR -->
    @include('client.common.navbar')

    <div class="container">

    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div class="dropdown">
                <button type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </button>
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </div>
                        @php $total = 0 @endphp
                        @foreach((array) session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    </div>
                    @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                    <div class="row cart-detail">
                        <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                            <img src="/storage/{{ $details['image'] }}" />
                        </div>
                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                            <p>{{ $details['name'] }}</p>
                            <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @yield('content')
    </div>
    <!-- SECTIONS -->
    <div class="container mt-5 mb-5">
        <div class="row ">

            <div class="row" id="product-list">
                @include('client.partials.product_cards',['products' => $products])
            </div>
        </div>

        @if ($products->hasMorePages())
        <center>
            <button id="load-more" class="btn btn-info loadMore" data-url="{{ route('productShop.loadMore', ['page' => $products->currentPage() + 1]) }}" style="border:2px solid; cursor:pointer;">
                <b>More Products</b>
            </button>
        </center>
        @endif
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
    <script>
        $(document).on('click', '#load-more', function() {
            let button = $(this);
            let url = button.data('url');

            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#product-list').append(response.products);

                    if (response.next_page_url) {
                        button.data('url', response.next_page_url);
                    } else {
                        button.remove(); // No more pages, so remove the button
                    }
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                    alert('AJAX failed:\n' + xhr.responseText);
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(".update-cart").change(function(e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: "{{ route('update.cart')}}",
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Are you sure want to remove?")) {
                $.ajax({
                    url: "{{ route('remove.from.cart') }}",
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
    <script>
        document.querySelectorAll('.rating-star').forEach(star => {
            star.addEventListener('click', function() {
                const rating = this.getAttribute('data-rating');
                const container = this.closest('.rating');
                const productId = container.getAttribute('data-product-id');

                fetch("{{ route('reviews.store') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        },
                        body: JSON.stringify({
                            rating: rating,
                            product_id: productId
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            container.querySelectorAll('.rating-star').forEach((starEl, idx) => {
                                starEl.classList.toggle('text-warning', idx < rating);
                            });
                        }
                    });
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

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