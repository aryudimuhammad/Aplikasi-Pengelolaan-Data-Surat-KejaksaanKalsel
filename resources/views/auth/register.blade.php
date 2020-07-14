@extends('layouts.app')

@section('title')Form Register @endsection

@section('content')
<!-- Register Start-->
<div class="login-form-area mg-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3"></div>
            <form method="POST" action="{{ route('register') }}" id="adminpro-register-form" class="adminpro-form">
                @csrf
                <div class="col-lg-6">
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
                                    <h1>Registration Form</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="login-input-head">
                                    <p>Nama Lengkap</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="login-input-area">
                                    <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <i class="fa fa-user login-user"></i>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red;">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="login-input-head">
                                    <p>Email Address</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="login-input-area">
                                    <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
                                    <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red;">{{ $message }}</strong>
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
                                    <input type="password" id="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    <i class="fa fa-lock login-user"></i>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red;">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="login-input-head">
                                    <p>Confirm Password</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="login-input-area">
                                    <input type="password" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                                    <i class="fa fa-lock login-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-8">
                                <a href="{{ route('login') }}">do you have an account? click Log In!</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-8">
                                <div class="login-button-pro">
                                    <a href="{{ route('login') }}" class="login-button login-button-rg">Log In</a>
                                    <button type="submit" class="login-button login-button-lg">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-lg-3"></div>
        </div>
    </div>
</div>
<!-- Register End-->
@endsection
