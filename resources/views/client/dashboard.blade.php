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
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Beauty Salon</h1>
                <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Created by <a href="#">Colorlib.com</a></p>

                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://vimeo.com/45830194" class="btn btn-white btn-outline-white px-4 py-3">View Our Services</a></p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

<!-- SECTION#1(BELOW NAVABAR) -->

<section class="ftco-section">
    <div class="container">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <img src="/storage/{{$category->image}}" class="img-fluid rounded thumbnail-image">
                    <div class="media-body">
                        <h3 class="heading">{{$category->name}}</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>

<!-- SECTION#2(BEAUTY EXPERTS) -->
<section class="ftco-section bg-light">
    <div class="container">

        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Our Beauty Experts</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mt-3">{{session('status')}}</div>
        @endif
        <div class="row">
            @foreach($about as $expert)
            <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="img mb-4"><img src="/storage/{{$expert->image}}" class="img-fluid rounded-circle"></div>
                    <div class="info text-center">
                        <h3><a href="teacher-single.html">{{$expert->name}}</a></h3>
                        <span class="position">{{$expert->experts}}</span>
                        <div class="text">
                            <p>{{$expert->details}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- SECTION#6(BEAUTY PRICING) -->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">Beauty Pricing</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            @foreach($price as $price)
            <div class="col-md-3 ftco-animate">
                <div class="pricing-entry pb-5 text-center">
                    <div>
                        <h3 class="mb-4">{{$price->package}}</h3>
                        <p><span class="price">${{$price->price}}</span> <span class="per">/ one trip</span></p>
                    </div>
                    <ul>
                        @foreach(explode(',', $price->services) as $service)
                        <li>{{ $service }}</li>
                        @endforeach
                    </ul>
                    <p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- SECTION#7(PREVIOUS WORK DONE) -->
<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-flower"></span></div>
                                <span>Makeup Over Done</span>
                                <strong class="number" data-number="3500">0</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-flower"></span></div>
                                <span>Procedure</span>
                                <strong class="number" data-number="1000">0</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-flower"></span></div>
                                <span>Happy Client</span>
                                <strong class="number" data-number="3000">0</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-flower"></span></div>
                                <span>Skin Treatment</span>
                                <strong class="number" data-number="900">0</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION#1(BLOGS) -->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Recent from blog</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="row d-flex">
            @foreach($posts as $post)
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="/client/blogSingle" class="block-20">
                        <img src="/storage/{{$post->image}}" class="img-fluid rounded thumbnail-image">
                    </a>
                    <div class="text py-4 d-block">
                        <div class="meta">
                            <div><a href="#"><span class="icon-calendar"></span> {{$post->created_at->format('M d, Y')}}</a></div>
                            <div><a href="#"><span class="icon-person"></span>{{$post->author}}</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading mt-2"><a href="#">{{$post->title}}</a></h3>
                        <p>{{$post->content}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- SECTION#5(COSMETIC'S COMPANIES) -->
<section class="ftco-partner bg-light">
    <div class="container">
        <div class="row partner justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3 ftco-animate">
                        <a href="#" class="partner-entry">
                            <img src="images/partner-1.jpg" class="img-fluid" alt="Colorlib template">
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="#" class="partner-entry">
                            <img src="images/partner-2.jpg" class="img-fluid" alt="Colorlib template">
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="#" class="partner-entry">
                            <img src="images/partner-3.jpg" class="img-fluid" alt="Colorlib template">
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="#" class="partner-entry">
                            <img src="images/partner-4.jpg" class="img-fluid" alt="Colorlib template">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection