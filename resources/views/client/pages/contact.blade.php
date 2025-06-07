@extends('client.common.layout')

@section('hero')
<div class="hero-wrap js-fullheight"
    style="background-image: url('{{ asset('storage/upload/Hero_img.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <div class="icon">
                    <a href="" class="logo">
                        <span class="flaticon-flower"></span>
                        <h1>Pretty Gurls</h1>
                    </a>
                </div>
                <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact</h1>
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span>Contact</span></p>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')

<section class="ftco-section contact-section">
    @if(session('status'))
    <div class="alert alert-success mt-3 text-center"><i class="fa-solid fa-circle-check  fs-3 pe-3"></i>{{session('status')}}</div>
    @endif
    <div class="container mt-5">
        <div class="row block-9">
            <div class="col-md-4 contact-info ftco-animate">

                <div class="row">
                    <div class="col-md-12 mb-4">
                        <h2 class="h4">Contact Information</h2>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p><span>Address:</span> Auto Centre 108-Lytton Road, Lahore,Pakistan</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p><span>Phone:</span> <a href="tel://1234567920">+92 328138185</a></p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">pretty@gmail.com</a></p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p><span>Website:</span> <a href="#">pretty.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 ftco-animate">
                <form method="POST" action="{{route('contact.store')}}" class="contact-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject" name="subject">
                    </div>
                    <div class="form-group">
                        <textarea id="" cols="30" rows="7" class="form-control" placeholder="Message" name="message"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary py-3 px-5">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3400.0681759276317!2d74.31172917412084!3d31.549743545692948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904a85dc84db3%3A0x6ea90ca8ef705f6d!2sAuto%20Centre!5e0!3m2!1sen!2s!4v1749195794459!5m2!1sen!2s" width="600" height="500" style="border:0;" allowfullscreen=""aria-hidden="false" tabindex="0" ></iframe>
    
</div>
@endsection