@extends('layouts.app')
@section('content')
<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
</div>
<form method="POST" action="{{ route('login') }}">
@csrf
<center><img src="mainLogo.png" class="img-fluid" height="80px" width="80px"></center>
    <h3>{{ __('Login') }}</h3>

    <label for="email">{{ __('Email Address') }}</label>
    <div class="col-md-12">
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <label for="password">{{ __('Password') }}</label>
    <div class="col-md-12">
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="col-md-12">
        <button type="submit">
            {{ __('Login') }}
        </button>

        @if (Route::has('password.request'))
        <a class="btn btn-link text-light" href="{{ route('password.request') }}" >
            {{ __('Forgot Your Password?') }}
        </a>
        @endif
    </div>
</form>
@endsection