<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="dashboard">Pretty</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{route('clientDashboard')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{url('about')}}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{route('clientBlog')}}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="{{route('productShop')}}" class="nav-link">Shop</a></li>
                <li class="nav-item"><a href="{{route('checkout.create')}}" class="nav-link">Checkout</a></li>
                <li class="nav-item"><a href="{{route('contact.create')}}" class="nav-link">Contact</a></li>
                @guest
                <li class="nav-item d-flex mt-4"><a href="/login"><i class="fa-solid fa-power-off text-danger"></i> Login</a>/<a href="/register">Register</a></li>
                @endguest
                @auth
                <li class="nav-item mt-4"><a href="/login"> Dashboard</a></li>
                <li class="nav-item mt-4 ps-3">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @endauth
                <!-- <li class="nav-item"><a href="{{route('cart')}}" class="nav-link"><i class="fa fa-shopping-cart fs-4"></i></a></li> -->
            </ul>
        </div>
    </div>
</nav>