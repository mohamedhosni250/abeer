@extends('layouts.main')

@section('content')
    <div class="login-registration-wrapper">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="login-page-form-area">
                        <h4 class="title">Sign Up to Your Account👋</h4>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="single-input-wrapper">
                                <label for="name">Your Name*</label>
                                <input id="name" type="text" name="name" value="{{ old('name') }}"
                                    placeholder="Enter Your Name" required autofocus>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="single-input-wrapper">
                                <div class="single-input-wrapper">
                                    <label for="email">Email*</label>
                                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                                        placeholder="Enter Your Email" required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="half-input-wrapper">
                                <div class="single-input-wrapper">
                                    <label for="password">Your Password</label>
                                    <input id="password" type="password" name="password" placeholder="Password" required>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="single-input-wrapper">
                                    <label for="password_confirmation">Re Password</label>
                                    <input id="password_confirmation" type="password" name="password_confirmation"
                                        placeholder="Re Password" required>
                                </div>
                            </div>
                            <div class="single-checkbox-filter">
                                <div class="check-box">
                                    <input type="checkbox" id="terms" required>
                                    <label for="terms">Accept the Terms and Privacy Policy</label><br>
                                </div>
                            </div>
                            <button class="rts-btn btn-primary">Register</button>
                            <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
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
