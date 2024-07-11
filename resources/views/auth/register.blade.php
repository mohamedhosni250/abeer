@extends('layouts.app')

@section('content')
    <div class="loginarea sp_top_100 sp_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 offset-md-2 aos-init aos-animate" data-aos="fade-up">
                    <ul class="nav tab__button__wrap text-center" id="myTab" role="tablist">
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
                                    <p class="login__description">Don't have an account yet? <a href="#"
                                            data-bs-toggle="tab" data-bs-target="#projects__two">Sign up for free</a></p>
                                </div>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="login__form">
                                        <label class="form__label">Email</label>
                                        <input class="common__login__input" type="email" name="email"
                                            value="{{ old('email') }}" required autofocus>
                                    </div>
                                    <div class="login__form">
                                        <label class="form__label">Password</label>
                                        <input class="common__login__input" type="password" name="password" required>
                                    </div>
                                    <div class="login__form d-flex justify-content-between flex-wrap gap-2">
                                        <div class="form__check">
                                            <input id="remember_me" type="checkbox" name="remember">
                                            <label for="remember_me"> Remember me</label>
                                        </div>
                                        <div class="text-end login__form__link">
                                            <a href="{{ route('password.request') }}">Forgot your password?</a>
                                        </div>
                                    </div>
                                    <div class="login__button">
                                        <button class="default__button" type="submit">Log In</button>
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
                        <div class="col-xl-8 offset-md-2">
                            <div class="loginarea__wraper">
                                <div class="login__heading">
                                    <h5 class="login__title">Sign Up</h5>
                                    <p class="login__description">Already have an account? <a href="#"
                                            data-bs-toggle="tab" data-bs-target="#projects__one">Log In</a></p>
                                </div>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">First Name</label>
                                                <input class="common__login__input" type="text" name="first_name"
                                                    value="{{ old('first_name') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Last Name</label>
                                                <input class="common__login__input" type="text" name="last_name"
                                                    value="{{ old('last_name') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Username</label>
                                                <input class="common__login__input" type="text" name="username"
                                                    value="{{ old('username') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Email</label>
                                                <input class="common__login__input" type="email" name="email"
                                                    value="{{ old('email') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Password</label>
                                                <input class="common__login__input" type="password" name="password"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Confirm Password</label>
                                                <input class="common__login__input" type="password"
                                                    name="password_confirmation" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="login__form d-flex justify-content-between flex-wrap gap-2">
                                        <div class="form__check">
                                            <input id="accept_pp" type="checkbox" name="terms">
                                            <label for="accept_pp">Accept the Terms and Privacy Policy</label>
                                        </div>
                                    </div>
                                    <div class="login__button">
                                        <button class="default__button" type="submit">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" login__shape__img educationarea__shape_image">
                <img loading="lazy" class="hero__shape hero__shape__1" src="img/education/hero_shape2.png"
                    alt="Shape">
                <img loading="lazy" class="hero__shape hero__shape__2" src="img/education/hero_shape3.png"
                    alt="Shape">
                <img loading="lazy" class="hero__shape hero__shape__3" src="img/education/hero_shape4.png"
                    alt="Shape">
                <img loading="lazy" class="hero__shape hero__shape__4" src="img/education/hero_shape5.png"
                    alt="Shape">
            </div>
        </div>
    </div>
@endsection
