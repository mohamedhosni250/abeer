@extends('layouts.main')
@section('content')
    <div class="header-transparent">
        <!-- Add your header content here -->
    </div>

    <div class="login-registration-wrapper">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="login-page-form-area">
                        <h4 class="title">Login to Your Account👋</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="single-input-wrapper">
                                <label for="email">Your Email</label>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                    autofocus>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="single-input-wrapper">
                                <label for="password">Your Password</label>
                                <input id="password" type="password" name="password" required>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="single-checkbox-filter">
                                <div class="check-box">
                                    <input type="checkbox" id="remember" name="remember">
                                    <label for="remember">Remember Me</label>
                                </div>
                            </div>
                            <button class="rts-btn btn-primary">Login</button>
                            <p>Don't Have an account? <a href="{{ route('register') }}">Registration</a></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-thumbnail-login-p mt--100">
                        <img src="images/banner/login-bg.png" width="600" height="495" alt="login-form">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
