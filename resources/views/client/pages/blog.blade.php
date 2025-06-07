@extends('client.common.layout')

@section('hero')
<div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('storage/upload/Hero_img.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <div class="icon">
                    <a class="logo">
                        <span class="flaticon-flower"></span>
                        <h1>Pretty Gurls</h1>
                    </a>
                </div>
                <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Read Blog</h1>
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span>Blog</span></p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<!-- BLOG SECTION -->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Recent from blog</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="row d-flex">
            @foreach($posts as $post)
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                   
                        <img src="/storage/{{$post->image}}" class="img-fluid thumbnail-image">
                    <div class="text py-4 d-block">
                        <div class="meta">
                            <div><a href="#"><span class="icon-calendar"></span> {{$post->created_at->format('d-M-Y-D')}}</a></div>
                            <div><a href="#"><span class="icon-person"></span>{{$post->author}}</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading mt-2"><a href="#">{{$post->title}}</a></h3>
                        <form action="{{route('blog.show',[$post->id])}}" method="POST">
                            @csrf
                            <button class="btn btn-primary py-3 px-5">Read More</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection