@extends('layouts.app')

@section('content')
    <div class="loginarea sp_top_100 sp_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 offset-md-2 aos-init aos-animate" data-aos="fade-up">
                    <ul class="nav  tab__button__wrap text-center" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link active" data-bs-toggle="tab" data-bs-target="#projects__one"
                                type="button" aria-selected="true" role="tab">Login</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__two"
                                type="button" aria-selected="false" tabindex="-1" role="tab">Sign Up</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content tab__content__wrapper aos-init aos-animate" id="myTabContent" data-aos="fade-up">
                    <div class="tab-pane fade active show" id="projects__one" role="tabpanel"
                        aria-labelledby="projects__one">
                        <div class="col-xl-8 col-md-8 offset-md-2">
                            <div class="loginarea__wraper">
                                <div class="login__heading">
                                    <h5 class="login__title">Login</h5>
                                    <p class="login__description">Don't have an account yet? <a
                                            href="{{ route('register') }}">Sign up for free</a></p>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="login__form">
                                        <label class="form__label">Username or email</label>
                                        <input id="email" type="email"
                                            class="common__login__input @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="login__form">
                                        <label class="form__label">Password</label>
                                        <input id="password" type="password"
                                            class="common__login__input @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="login__form d-flex justify-content-between flex-wrap gap-2">
                                        <div class="form__check">
                                            <input id="remember" type="checkbox" name="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            <label for="remember"> Remember me</label>
                                        </div>
                                        <div class="text-end login__form__link">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">Forgot your password?</a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="login__button">
                                        <button type="submit" class="default__button">Log In</button>
                                    </div>
                                </form>
                                <div class="login__social__option">
                                    <p>or Log-in with</p>
                                    <ul class="login__social__btn">
                                        <li><a class="default__button login__button__1" href="#"><i
                                                    class="icofont-facebook"></i> Facebook</a></li>
                                        <li><a class="default__button" href="#"><i class="icofont-google-plus"></i>
                                                Google</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="projects__two" role="tabpanel" aria-labelledby="projects__two">
                        @include('auth.register')
                    </div>
                </div>
            </div>

            <div class="login__shape__img educationarea__shape_image">
                <img loading="lazy" class="hero__shape hero__shape__1" src="{{ asset('img/education/hero_shape2.png') }}"
                    alt="Shape">
                <img loading="lazy" class="hero__shape hero__shape__2" src="{{ asset('img/education/hero_shape3.png') }}"
                    alt="Shape">
                <img loading="lazy" class="hero__shape hero__shape__3" src="{{ asset('img/education/hero_shape4.png') }}"
                    alt="Shape">
                <img loading="lazy" class="hero__shape hero__shape__4" src="{{ asset('img/education/hero_shape5.png') }}"
                    alt="Shape">
            </div>
        </div>
    </div>
@endsection
