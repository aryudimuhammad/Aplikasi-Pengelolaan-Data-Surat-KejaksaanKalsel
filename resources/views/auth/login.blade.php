@extends('layouts.app')

@section('title')Form Login @endsection

@section('content')
<!-- login Start-->
<div class="wrapper-pro">
    <div class="login-form-area mg-t-30 mg-b-40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4"></div>
                <form method="POST" action="{{ route('login') }}" id="adminpro-form" class="adminpro-form">
                    @csrf
                    <div class="col-lg-4">
                        <div class="login-bg">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="logo">
                                        <a><img src="{{url('template/img/logo/log.png')}}" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="login-title">
                                        <h1>Login Form</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>E-mail</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="email" id="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red;">{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>Password</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="password" id="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        <i class=" fa fa-lock login-user"></i>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color: red;">{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="forgot-password">
                                                <a href="{{ route('password.request') }}">Forgot password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-keep-me">
                                                <label class="checkbox" for="remember">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} checked><i></i>Keep me logged in
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-button-pro">
                                        <a href="{{ route('register') }}" class="login-button login-button-rg">Register</a>
                                        <button type="submit" class="login-button login-button-lg">Log in</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </div>
</div>
<!-- login End-->
@endsection
