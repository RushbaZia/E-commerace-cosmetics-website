@extends('layouts.app')

@section('content')
<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
</div>

<form method="POST" action="{{ route('login') }}">
@csrf
    <h3 style="padding-top:0px;" ><img src="mainLogo.png" class="img-fluid" height="60px" width="60px">{{ __('Register') }}</h3>

    <label for="name" style=" margin-top: 0px;">{{ __('Name') }}</label>
    <div class="col-md-12">
        <input id="name" type="text" placeholder="Enter Your Name" style=" margin-top: 0px;" class="form-control @error('email') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <label for="email" style=" margin-top: 0px;">{{ __('Email Address') }}</label>
    <div class="col-md-12">
        <input id="email" type="text" placeholder="Email or Phone" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <label for="password" style=" margin-top: 0px;">{{ __('Password') }}</label>
    <div class="col-md-12">
        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <label for="password" style=" margin-top: 0px;">{{ __('Confirm Password') }}</label>
    <div class="col-md-12">
        <input id="password-confirm" type="password" placeholder="Re-enter Password" class="form-control @error('password-confirm') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">

        @error('password-confirm')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="col-md-12">
        <button type="submit" style=" margin-top: 20px;">
        {{ __('Register') }}
        </button>
    </div>
</form>

@endsection
