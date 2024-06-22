@extends('layouts.app')

@section('title', 'Home 1 | Edurock - Education LMS Template')

@section('content')
    <main class="main_wrapper overflow-hidden">

        <!-- topbar__section__stert -->
        <div class="topbararea topbararea--2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="topbar__left">
                            <ul>
                                <li>
                                    Call Us: +1 800 123 456 789
                                </li>
                                <li>
                                    - Mail Us: Itcroc@mail.com
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="topbar__right">
                            <div class="topbar__icon">
                                <i class="icofont-location-pin"></i>
                            </div>
                            <div class="topbar__text">
                                <p>684 West College St. Sun City, USA</p>
                            </div>
                            <div class="topbar__list">
                                <ul>
                                    <li>
                                        <a href="#"><i class="icofont-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-youtube-play"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- topbar__section__end -->
        <!-- Mobile Menu Start Here -->
        <div class="mobile-off-canvas-active">
            <a class="mobile-aside-close"><i class="icofont  icofont-close-line"></i></a>
            <div class="header-mobile-aside-wrap">
                <div class="mobile-search">
                    <form class="search-form" action="#">
                        <input type="text" placeholder="Search entire store…">
                        <button class="button-search"><i class="icofont icofont-search-2"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap headerarea">

                    <div class="mobile-navigation">

                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="index.html">Home</a>
                                    <ul class="dropdown">
                                        <li class="menu-item-has-children"><a href="index.html">Homes Light</a>
                                            <ul class="dropdown">
                                                <li><a href="index.html">Home (Default)</a></li>
                                                <li><a href="home-2.html">Elegant</a></li>
                                                <li><a href="home-3.html">Classic</a></li>
                                                <li><a href="home-4.html">Classic LMS</a></li>
                                                <li><a href="home-5.html">Online Course </a></li>
                                                <li><a href="home-6.html">Marketplace </a></li>
                                                <li><a href="home-7.html">University</a></li>
                                                <li><a href="home-8.html">eCommerce</a></li>
                                                <li><a href="home-9.html">Kindergarten</a></li>
                                                <li><a href="home-10.html">Machine Learning</a></li>
                                                <li><a href="home-11.html">Single Course</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="index.html">Homes Dark</a>
                                            <ul class="dropdown">
                                                <li><a href="index-dark.html">Home Default (Dark)</a></li>
                                                <li><a href="home-2-dark.html">Elegant (Dark)</a></li>
                                                <li><a href="home-3-dark.html">Classic (Dark)</a></li>
                                                <li><a href="home-4-dark.html">Classic LMS (Dark)</a></li>
                                                <li><a href="home-5-dark.html">Online Course (Dark)</a></li>
                                                <li><a href="home-6-dark.html">Marketplace (Dark)</a></li>
                                                <li><a href="home-7-dark.html">University (Dark)</a></li>
                                                <li><a href="home-8-dark.html">eCommerce (Dark)</a></li>
                                                <li><a href="home-9-dark.html">Kindergarten (Dark)</a></li>
                                                <li><a href="home-10-dark.html">Kindergarten (Dark)</a></li>
                                                <li><a href="home-11-dark.html">Single Course (Dark)</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>


                                <li class="menu-item-has-children "><a href="#">Pages</a>

                                    <ul class="dropdown">
                                        <li class="menu-item-has-children">
                                            <a href="#">Get Started 1</a>

                                            <ul class="dropdown">
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="about-dark.html">About (Dark)<span
                                                            class="mega__menu__label new">New</span></a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-dark.html">Blog (Dark)</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <li><a href="blog-details-dark.html">Blog Details (Dark)</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Get Started 2</a>
                                            <ul class="dropdown">
                                                <li><a href="error.html">Error 404</a></li>
                                                <li><a href="error-dark.html">Error (Dark)</a></li>
                                                <li><a href="event-details.html">Event Details</a></li>
                                                <li><a href="zoom/zoom-meetings.html">Zoom<span
                                                            class="mega__menu__label">Online Call</span></a></li>
                                                <li><a href="zoom/zoom-meetings-dark.html">Zoom Meeting (Dark)</a></li>
                                                <li><a href="zoom/zoom-meeting-details.html">Zoom Meeting Details</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Get Started 3</a>
                                            <ul class="dropdown">
                                                <li><a href="zoom/zoom-meeting-details-dark.html">Meeting Details
                                                        (Dark)</a>
                                                </li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="login-dark.html">Login (Dark)</a></li>
                                                <li><a href="maintenance.html">Maintenance</a></li>
                                                <li><a href="maintenance-dark.html">Maintenance Dark</a></li>
                                                <li><a href="#">Terms & Condition</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Get Started 4</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Terms & Condition (Dark)</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Privacy Policy (Dark)</a></li>
                                                <li><a href="#">Success Stories</a></li>
                                                <li><a href="#">Success Stories (Dark)</a></li>
                                                <li><a href="#">Work Policy</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <div class="mega__menu__img">
                                                <a href="#"><img loading="lazy" src="img/mega/mega_menu_2.png"
                                                        alt="Mega Menu"></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>



                                <li class="menu-item-has-children "><a href="course.html">Courses</a>

                                    <ul class="dropdown">
                                        <li class="menu-item-has-children">
                                            <a href="#">Get Started 1</a>

                                            <ul class="dropdown">
                                                <li><a href="course.html">Grid <span class="mega__menu__label">All
                                                            Courses</span></a></li>
                                                <li><a href="course-dark.html">Course Grid (Dark)</a></li>
                                                <li><a href="course-grid.html">Course Grid</a></li>
                                                <li><a href="course-grid-dark.html">Course Grid (Dark)</a></li>
                                                <li><a href="course-list.html">Course List</a></li>
                                                <li><a href="course-list-dark.html">Course List (Dark)</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Get Started 2</a>
                                            <ul class="dropdown">
                                                <li><a href="course-details.html">Course Details</a></li>
                                                <li><a href="course-details-dark.html">Course Details (Dark)</a></li>
                                                <li><a href="course-details-2.html">Course Details 2</a></li>
                                                <li><a href="course-details-2-dark.html">Details 2 (Dark)</a></li>
                                                <li><a href="course-details-3.html">Course Details 3</a></li>
                                                <li><a href="course-details-3.html">Details 3 (Dark)</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Get Started 3</a>
                                            <ul class="dropdown">
                                                <li><a href="dashboard/become-an-instructor.html">Become An
                                                        Instructor</a>
                                                <li><a href="dashboard/create-course.html">Create Course <span
                                                            class="mega__menu__label">Career</span></a></li>
                                                <li><a href="instructor.html">Instructor</a></li>
                                                <li><a href="instructor-dark.html">Instructor (Dark)</a></li>
                                                <li><a href="instructor-details.html">Instructor Details</a></li>
                                                <li><a href="lesson.html">Course Lesson<span
                                                            class="mega__menu__label new">New</span></a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <div class="mega__menu__img">
                                                <a href="#"><img loading="lazy" src="img/mega/mega_menu_1.png"
                                                        alt="Mega Menu"></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>


                                <li class="menu-item-has-children "><a href="dashboard/admin-dashboard.html">Dashboard</a>

                                    <ul class="dropdown">
                                        <li class="menu-item-has-children">
                                            <a href="#">Admin</a>

                                            <ul class="dropdown">
                                                <li><a href="dashboard/admin-dashboard.html">Admin Dashboard</a></li>
                                                <li><a href="dashboard/admin-profile.html">Admin Profile</a></li>
                                                <li><a href="dashboard/admin-message.html">Message</a></li>
                                                <li><a href="dashboard/admin-course.html">Courses</a></li>
                                                <li><a href="dashboard/admin-reviews.html">Review</a></li>
                                                <li><a href="dashboard/admin-quiz-attempts.html">Admin Quiz</a></li>

                                                <li><a href="dashboard/admin-settings.html">Settings</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Instructor</a>
                                            <ul class="dropdown">
                                                <li><a href="dashboard/instructor-dashboard.html">Inst. Dashboard</a>
                                                </li>
                                                <li><a href="dashboard/instructor-profile.html">Inst. Profile</a></li>
                                                <li><a href="dashboard/instructor-message.html">Message</a></li>
                                                <li><a href="dashboard/instructor-wishlist.html">Wishlist</a></li>
                                                <li><a href="dashboard/instructor-reviews.html">Review</a></li>
                                                <li><a href="dashboard/instructor-my-quiz-attempts.html">My Quiz</a>
                                                </li>
                                                <li><a href="dashboard/instructor-order-history.html">Order History</a>
                                                </li>
                                                <li><a href="dashboard/instructor-course.html">My Courses</a></li>
                                                <li><a href="dashboard/instructor-announcments.html">Announcements</a>
                                                </li>
                                                <li><a href="dashboard/instructor-quiz-attempts.html">Quiz Attempts</a>
                                                </li>
                                                <li><a href="dashboard/instructor-assignments.html">Assignment</a></li>
                                                <li><a href="dashboard/instructor-settings.html">Settings</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Student</a>
                                            <ul class="dropdown">
                                                <li><a href="dashboard/student-dashboard.html">Dashboard</a></li>
                                                <li><a href="dashboard/student-profile.html">Profile</a></li>
                                                <li><a href="dashboard/student-message.html">Message</a></li>
                                                <li><a href="dashboard/student-enrolled-courses.html">Enrolled
                                                        Courses</a></li>
                                                <li><a href="dashboard/student-wishlist.html">Wishlist</a></li>
                                                <li><a href="dashboard/student-reviews.html">Review</a></li>
                                                <li><a href="dashboard/student-my-quiz-attempts.html">My Quiz</a></li>
                                                <li><a href="dashboard/student-assignments.html">Assignment</a></li>
                                                <li><a href="dashboard/student-settings.html">Settings</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menu-item-has-children"><a href="ecommerce/shop.html">eCommerce</a>
                                    <ul class="dropdown">
                                        <li><a href="ecommerce/shop.html">Shop<span class="mega__menu__label">Online
                                                    Store</span></a></li>
                                        <li><a href="ecommerce/product-details.html">Product Details</a></li>
                                        <li><a href="ecommerce/cart.html">Cart</a></li>
                                        <li><a href="ecommerce/checkout.html">Checkout</a></li>
                                        <li><a href="ecommerce/wishlist.html">Wishlist</a></li>

                                    </ul>
                                </li>

                            </ul>
                        </nav>

                    </div>

                </div>
                <div class="mobile-curr-lang-wrap">
                    <div class="single-mobile-curr-lang">
                        <a class="mobile-language-active" href="#">Language <i class="icofont-thin-down"></i></a>
                        <div class="lang-curr-dropdown lang-dropdown-active">
                            <ul>
                                <li><a href="#">English (US)</a></li>
                                <li><a href="#">English (UK)</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- <div class="single-mobile-curr-lang">
                                                                        <a class="mobile-currency-active" href="#">Currency <i class="icofont-thin-down"></i></a>
                                                                        <div class="lang-curr-dropdown curr-dropdown-active">
                                                                            <ul>
                                                                                <li><a href="#">USD</a></li>
                                                                                <li><a href="#">EUR</a></li>
                                                                                <li><a href="#">Real</a></li>
                                                                                <li><a href="#">BDT</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div> -->

                    <div class="single-mobile-curr-lang">
                        <a class="mobile-account-active" href="#">My Account <i class="icofont-thin-down"></i></a>
                        <div class="lang-curr-dropdown account-dropdown-active">
                            <ul>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="login.html">/ Create Account</a></li>
                                <li><a href="login.html">My Account</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mobile-social-wrap">
                    <a class="facebook" href="#"><i class="icofont icofont-facebook"></i></a>
                    <a class="twitter" href="#"><i class="icofont icofont-twitter"></i></a>
                    <a class="pinterest" href="#"><i class="icofont icofont-pinterest"></i></a>
                    <a class="instagram" href="#"><i class="icofont icofont-instagram"></i></a>
                    <a class="google" href="#"><i class="icofont icofont-youtube-play"></i></a>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end Here -->

        <!-- theme fixed shadow -->
        <div>
            <div class="theme__shadow__circle"></div>
            <div class="theme__shadow__circle shadow__right"></div>
        </div>
        <!-- theme fixed shadow -->
        <!-- herobannerarea__section__start -->
        <div class="herobannerarea herobannerarea__2 herobannerarea__university">

            <div class="swiper university__slider swiper-initialized swiper-horizontal swiper-backface-hidden">

                <div class="herobannerarea__slider__wrap swiper-wrapper" id="swiper-wrapper-7010c126753d46c3"
                    aria-live="polite" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">

                    <div class="swiper-slide herobannerarea__single__slider swiper-slide-active"
                        style="background: url(&quot;img/herobanner/university_1.jpg&quot;); width: 1903px; margin-right: 10px;"
                        role="group" aria-label="1 / 3">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 col-12 aos-init aos-animate"
                                    data-aos="fade-up">
                                    <div class="herobannerarea__content__wraper text-center">


                                        <div class="herobannerarea__title">
                                            <div class="herobannerarea__small__title">
                                                <span>Education Solution</span>
                                            </div>
                                            <div
                                                class="herobannerarea__title__heading__2 herobannerarea__title__heading__3">
                                                <h2>World <span>Ranking</span> best University place.</h2>
                                            </div>
                                        </div>


                                        <!-- <div class="herobannerarea__text herobannerarea__text__2">
                                                                                <p>Lorem Ipsum is simply dummy text of the printing typesetting.</p>
                                                                            </div> -->

                                            <form action="{{ route('search') }}" method="GET"
                                                class="d-flex justify-content-center mt-4">
                                                <div class="form-group mx-2">
                                                    <select name="degree" class="form-control">
                                                        <option value="" disabled selected>Select Degree</option>
                                                        @foreach ($degrees as $degree)
                                                            <option value="{{ $degree->id }}">{{ $degree->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group mx-2">
                                                    <select name="department" class="form-control">
                                                        <option value="" disabled selected>Select Faculty
                                                        </option>
                                                        @foreach ($departments as $department)
                                                            <option value="{{ $department->id }}">
                                                                {{ $department->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </form>
                                            {{-- hosni form  --}}
                                            
                                   
                                        <div class="footerarea__icon footerarea__icon__2">
                                            <p>Followed by :</p>
                                            <ul>
                                                <li><a href="http://facebook.com/"><i class="icofont-facebook"></i></a>
                                                </li>
                                                <li><a href="http://twitter.com/"><i class="icofont-twitter"></i></a>
                                                </li>
                                                <li><a href="http://vimeo.com/"><i class="icofont-vimeo"></i></a></li>
                                                <li><a href="http://linkedin.com/"><i class="icofont-linkedin"></i></a>
                                                </li>
                                                <li><a href="http://skype.com/"><i class="icofont-skype"></i></a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide herobannerarea__single__slider swiper-slide-next"
                        style="background: url(&quot;img/herobanner/university_2.jpg&quot;); width: 1903px; margin-right: 10px;"
                        role="group" aria-label="2 / 3">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 col-12 aos-init aos-animate"
                                    data-aos="fade-up">
                                    <div class="herobannerarea__content__wraper text-center">


                                        <div class="herobannerarea__title">
                                            <div class="herobannerarea__small__title">
                                                <span>Career Solution</span>
                                            </div>
                                            <div
                                                class="herobannerarea__title__heading__2 herobannerarea__title__heading__3">
                                                <!-- <h2>World <span>Ranking</span> best University place.</h2> -->
                                                <h2>Degree that’s right for your Bright future</h2>
                                            </div>
                                        </div>


                                        <!-- <div class="herobannerarea__text herobannerarea__text__2">
                                                                                <p>Lorem Ipsum is simply dummy text of the printing typesetting.</p>
                                                                            </div> -->
                                        <div class="hreobannerarea__button__2">
                                            <a class="default__button" href="#">More about university</a>
                                        </div>

                                        <div class="footerarea__icon footerarea__icon__2">
                                            <p>Followed by :</p>
                                            <ul>
                                                <li><a href="http://facebook.com/"><i class="icofont-facebook"></i></a>
                                                </li>
                                                <li><a href="http://twitter.com/"><i class="icofont-twitter"></i></a>
                                                </li>
                                                <li><a href="http://vimeo.com/"><i class="icofont-vimeo"></i></a></li>
                                                <li><a href="http://linkedin.com/"><i class="icofont-linkedin"></i></a>
                                                </li>
                                                <li><a href="http://skype.com/"><i class="icofont-skype"></i></a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide herobannerarea__single__slider"
                        style="background: url(&quot;img/herobanner/university_3.jpg&quot;); width: 1903px; margin-right: 10px;"
                        role="group" aria-label="3 / 3">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 col-12 aos-init aos-animate"
                                    data-aos="fade-up">
                                    <div class="herobannerarea__content__wraper text-center">


                                        <div class="herobannerarea__title">
                                            <div class="herobannerarea__small__title">
                                                <span>Certificate Solution</span>
                                            </div>
                                            <div
                                                class="herobannerarea__title__heading__2 herobannerarea__title__heading__3">
                                                <h2>Let’s build your awesome Degree with Edurock</h2>
                                            </div>
                                        </div>


                                        <!-- <div class="herobannerarea__text herobannerarea__text__2">
                                                                                <p>Lorem Ipsum is simply dummy text of the printing typesetting.</p>
                                                                            </div> -->
                                        <div class="hreobannerarea__button__2">
                                            <a class="default__button" href="#">More about university</a>
                                        </div>

                                        <div class="footerarea__icon footerarea__icon__2">
                                            <p>Followed by :</p>
                                            <ul>
                                                <li><a href="http://facebook.com/"><i class="icofont-facebook"></i></a>
                                                </li>
                                                <li><a href="http://twitter.com/"><i class="icofont-twitter"></i></a>
                                                </li>
                                                <li><a href="http://vimeo.com/"><i class="icofont-vimeo"></i></a></li>
                                                <li><a href="http://linkedin.com/"><i class="icofont-linkedin"></i></a>
                                                </li>
                                                <li><a href="http://skype.com/"><i class="icofont-skype"></i></a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>


            <div thumbsslider=""
                class="swiper university__slider__thumb swiper-initialized swiper-horizontal swiper-free-mode swiper-watch-progress swiper-backface-hidden swiper-thumbs">
                <div class="swiper-wrapper" id="swiper-wrapper-1a35e24425692eca" aria-live="polite"
                    style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                    <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active"
                        role="group" aria-label="1 / 3" style="width: 468.25px; margin-right: 10px;">
                        <img loading="lazy" src="img/herobanner/university_1.jpg">
                    </div>
                    <div class="swiper-slide swiper-slide-visible swiper-slide-next" role="group" aria-label="2 / 3"
                        style="width: 468.25px; margin-right: 10px;">
                        <img loading="lazy" src="img/herobanner/university_2.jpg">
                    </div>
                    <div class="swiper-slide swiper-slide-visible" role="group" aria-label="3 / 3"
                        style="width: 468.25px; margin-right: 10px;">
                        <img loading="lazy" src="img/herobanner/university_3.jpg">
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>


            <div class="slider__controls__wrap slider__controls__pagination slider__controls__arrows">
                <div class="swiper-button-next arrow-btn" tabindex="0" role="button" aria-label="Next slide"
                    aria-controls="swiper-wrapper-7010c126753d46c3" aria-disabled="false"></div>
                <div class="swiper-button-prev arrow-btn swiper-button-disabled" tabindex="-1" role="button"
                    aria-label="Previous slide" aria-controls="swiper-wrapper-7010c126753d46c3" aria-disabled="true">
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="herobannerarea__icon__2">
                <img loading="lazy" class="herobanner__common__img herobanner__img__1"
                    src="img/herobanner/herobanner__1.png" alt="photo">
                <img loading="lazy" class="herobanner__common__img herobanner__img__2"
                    src="img/herobanner/herobanner__2.png" alt="photo">
                <img loading="lazy" class="herobanner__common__img herobanner__img__3"
                    src="img/herobanner/herobanner__3.png" alt="photo">
                <!--<img loading="lazy"  class="herobanner__common__img herobanner__img__4" src="img/herobanner/herobanner__4.png" alt="photo">-->
                <img loading="lazy" class="herobanner__common__img herobanner__img__5"
                    src="img/herobanner/herobanner__5.png" alt="photo">
            </div>

        </div>
        <!-- herobannerarea__section__end-->

        <!-- brand__section__start -->
        <div style="margin-top: 100px ;" class="brandarea__2">
            <div class="container">
                <div class="row" data-aos="fade-up">
                    <div class="brandarea__wraper brandarea__wraper__2">
                        <div class="brandarea__img">
                            <a href="#"><img loading="lazy" src="img/brand/brand_1.png" alt="brand"></a>
                        </div>
                        <div class="brandarea__img">
                            <a href="#"><img loading="lazy" src="img/brand/brand_2.png" alt="brand"></a>
                        </div>
                        <div class="brandarea__img">
                            <a href="#"><img loading="lazy" src="img/brand/brand_3.png" alt="brand"></a>
                        </div>
                        <div class="brandarea__img">
                            <a href="#"><img loading="lazy" src="img/brand/brand_4.png" alt="brand"></a>
                        </div>
                        <div class="brandarea__img">
                            <a href="#"><img loading="lazy" src="img/brand/brand_5.png" alt="brand"></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- brand__section__end -->

        <!-- aboutarea__2__section__start -->
        <div class="aboutarea__2 sp_top_30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" data-aos="fade-up">
                        <div class="about__right__wraper__2">
                            <div class="educationarea__img" data-tilt>
                                <img loading="lazy" class="aboutarea__2__img__1" src="img/about/about_2.png"
                                    alt="education">
                                <img loading="lazy" class="aboutarea__2__img__2" src="img/about/about_3.png"
                                    alt="education">
                                <img loading="lazy" class="aboutarea__2__img__3" src="img/about/about_4.png"
                                    alt="education">
                                <img loading="lazy" class="aboutarea__2__img__4" src="img/about/about_11.png"
                                    alt="education">
                            </div>
                            <div class="aboutarea__2__text">
                                <div class="aboutarea__counter">
                                    <span class="counter">25</span> +
                                </div>

                                <p>YEARS EXPERIENCE JUST ACHIVED</p>


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" data-aos="fade-up">

                        <div class="aboutarea__content__wraper">
                            <div class="aboutarea__button">
                                <div class="default__small__button">About Us</div>
                            </div>
                            <div class="aboutarea__headding heading__underline">
                                <h2>Welcome to the <span>Online</span> Learning Center</h2>
                            </div>
                            <div class="aboutarea__para aboutarea__para__2">
                                <p>25+Contrary to popular belief, Lorem Ipsum is not simply random text roots in a piece
                                    of classical Latin literature from 45 BC</p>
                            </div>
                            <div class="aboutarea__list__2">
                                <ul>
                                    <li>
                                        <i class="icofont-check"></i> Lorem Ipsum is simply dummy
                                    </li>

                                    <li>
                                        <i class="icofont-check"></i> Explore a variety of fresh educational teach
                                    </li>

                                    <li>
                                        <i class="icofont-check"></i> Lorem Ipsum is simply dummy text of
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- aboutarea__2__section__end -->

        <!-- counter__section__start -->
        <div class="counterarea sp_bottom_100 sp_top_50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                        <div class="counterarea__text__wraper">
                            <div class="counter__img">
                                <img loading="lazy" src="img/counter/counter__1.png" alt="counter">
                            </div>
                            <div class="counter__content__wraper">
                                <div class="counter__number">
                                    <span class="counter">27</span>+

                                </div>
                                <p>Total Acheivment</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                        <div class="counterarea__text__wraper">
                            <div class="counter__img">
                                <img loading="lazy" src="img/counter/counter__2.png" alt="counter">
                            </div>
                            <div class="counter__content__wraper">
                                <div class="counter__number">
                                    <span class="counter">145</span>+

                                </div>
                                <p>TOTAL STUDENTS</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                        <div class="counterarea__text__wraper">
                            <div class="counter__img">
                                <img loading="lazy" src="img/counter/counter__3.png" alt="counter">
                            </div>
                            <div class="counter__content__wraper">
                                <div class="counter__number">
                                    <span class="counter">10</span>k

                                </div>
                                <p>tOTAL INSTRUCTOR</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                        <div class="counterarea__text__wraper">
                            <div class="counter__img">
                                <img loading="lazy" src="img/counter/counter__4.png" alt="counter">
                            </div>
                            <div class="counter__content__wraper">
                                <div class="counter__number">
                                    <span class="counter">214</span>+

                                </div>
                                <p>OVER THE WORLD</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter__section__end-->


        <!-- populer__section__start -->
        <div class="populerarea__2 sp_top_50 sp_bottom_50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 about__wrap__content" data-aos="fade-up">
                        <div class="service__animate__shape__1">
                            <img loading="lazy" src="img/service/service__shape__1.png" alt="">
                        </div>
                        <div class="populerarea__content__wraper__2">
                            <div class="section__title ">
                                <div class="section__title__button">
                                    <div class="default__small__button">Populer Subject</div>
                                </div>
                                <div class="section__title__heading">
                                    <h2>Provide It & Technol
                                        <br> Subject For You
                                    </h2>
                                </div>
                            </div>

                            <div class="populerarea__content__2">
                                <p class="populerarea__para__1">Construction is a general term meaning the art and
                                    science to form systems organizations, and comes from Latin Construction is</p>
                                <p class="populerarea__para__2">Construction is a general term meaning the art and
                                    science to form systems organizations, and comes from Latin Construction is a
                                    organizations, and comes from Latin construction and Old</p>
                            </div>
                            <div class="populerarea__button__2">
                                <a class="default__button" href="#">Explore More
                                    <i class="icofont-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 service__wrap__content">
                        <div class="service__animate__shape__2">
                            <img loading="lazy" src="img/service/service__shape__bg__1.png" alt="">
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up">
                                <div class="single__service">
                                    <div class="service__img">

                                        <svg class="service__icon" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.30281 28.9536H8.45394C9.05625 28.9536 9.48648 29.5426 9.48648 30.2495V36.8465C9.48648 37.6711 9.05625 38.2602 8.45394 38.2602H6.30281C5.78654 38.2602 5.27026 37.6711 5.27026 36.8465V30.2495C5.27026 29.5426 5.78654 28.9536 6.30281 28.9536Z"
                                                fill="#5F2DED" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M13.7027 23.7833H15.8987C16.4257 23.7833 16.8649 24.4239 16.8649 25.3207V36.7228C16.8649 37.6196 16.4257 38.2602 15.8987 38.2602H13.7027C13.0879 38.2602 12.6487 37.6196 12.6487 36.7228V25.3207C12.6487 24.4239 13.0879 23.7833 13.7027 23.7833Z"
                                                fill="#5F2DED" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M21.0596 19.6471H23.2108C23.727 19.6471 24.2433 20.412 24.2433 21.1769V36.7303C24.2433 37.6227 23.727 38.2602 23.2108 38.2602H21.0596C20.4573 38.2602 20.0271 37.6227 20.0271 36.7303V21.1769C20.0271 20.412 20.4573 19.6471 21.0596 19.6471Z"
                                                fill="#5F2DED" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M28.4381 15.5109H30.5892C31.1055 15.5109 31.6217 16.1499 31.6217 17.0445V36.7265C31.6217 37.6212 31.1055 38.2602 30.5892 38.2602H28.4381C27.8357 38.2602 27.4055 37.6212 27.4055 36.7265V17.0445C27.4055 16.1499 27.8357 15.5109 28.4381 15.5109Z"
                                                fill="#5F2DED" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M26.9989 7.6293L23.05 18.137L20.3744 15.4678C15.622 19.6266 9.96272 22.5976 3.63238 24.2568C1.36694 24.9297 0.353173 21.6176 2.74495 21.0505C8.47735 19.533 13.5443 16.8156 17.8363 13.1279L15.5453 10.8879L26.9989 7.6293Z"
                                                fill="#FFB31F" />
                                        </svg>



                                        <div class="service__bg__img">
                                            <svg class="service__icon__bg" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M63.3775 44.4535C54.8582 58.717 39.1005 53.2202 23.1736 47.5697C7.2467 41.9192 -5.18037 32.7111 3.33895 18.4477C11.8583 4.18418 31.6595 -2.79441 47.5803 2.85105C63.5011 8.49652 71.8609 30.2313 63.3488 44.4865L63.3775 44.4535Z"
                                                    fill="#5F2DED" fill-opacity="0.05" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="service__content service__content__2">
                                        <h3><a href="course-details.html">Business Studies</a></h3>
                                        <p>Construction is a general term the art and science to form </p>
                                    </div>
                                    <div class="service__button">
                                        <a href="#">View Subject
                                            <i class="icofont-long-arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="service__small__img">
                                        <svg class="icon__hover__img" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.5961 10.265L19 1.33069L10.0022 3.73285L1 6.1306L7.59393 12.6627L14.1879 19.1992L16.5961 10.265Z"
                                                stroke="#FFB31F" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="single__service">
                                    <div class="service__img">
                                        <svg class="service__icon" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M45.8483 26.6935C45.3965 26.2639 44.7953 26.0262 44.1558 26.0262C43.5164 26.0262 42.9166 26.2639 42.4634 26.6935L33.7409 34.9886C33.7306 34.9886 33.7183 34.9867 33.708 34.9867H25.1438C25.1438 34.9541 25.1458 34.9229 25.1458 34.8898C25.1458 34.2537 25.0301 33.6443 24.8165 33.0772H29.4735C29.7924 33.6951 30.4593 34.1214 31.2316 34.1214C32.314 34.1214 33.193 33.2873 33.193 32.258C33.193 31.2287 32.314 30.3946 31.2316 30.3946C30.4593 30.3946 29.7924 30.821 29.4735 31.4389H23.8321C22.7928 30.2507 21.2243 29.4949 19.4716 29.4949C17.9393 29.4949 16.5502 30.0736 15.53 31.0111L15.5281 31.0092L2.44995 43.5669H15.5486L19.0217 40.2842H33.708C34.1956 40.2842 34.6542 40.1645 35.0526 39.9548C35.325 39.8434 35.5749 39.6827 35.79 39.4776L45.8488 29.9124C46.3015 29.4832 46.5499 28.911 46.5499 28.3029C46.5499 27.6949 46.3015 27.1231 45.8483 26.6935ZM19.4716 37.1422C18.1633 37.1422 17.1034 36.1325 17.1034 34.8902C17.1034 33.6461 18.1633 32.6369 19.4716 32.6369C20.7799 32.6369 21.8397 33.6466 21.8397 34.8902C21.8397 36.1325 20.7799 37.1422 19.4716 37.1422ZM33.6664 38.9106C32.9255 38.9106 32.3253 38.3402 32.3253 37.6352C32.3253 36.9321 32.925 36.3599 33.6664 36.3599C34.4077 36.3599 35.0075 36.9321 35.0075 37.6352C35.0075 38.3402 34.4077 38.9106 33.6664 38.9106ZM36.3001 36.6749C36.133 36.2634 35.8606 35.9028 35.5127 35.6209L42.0537 29.4026C42.2727 29.7814 42.602 30.096 43.0019 30.3024L36.3001 36.6749ZM36.231 9.4762H28.4753V8.49301H36.231V9.4762ZM36.231 12.0986H28.4753V11.1155H36.231V12.0986ZM23.3048 9.4762H15.5486V8.49301H23.3044L23.3048 9.4762ZM23.3048 12.0986H15.5486V11.1155H23.3044L23.3048 12.0986ZM41.057 5.87011H39.3308V4.23132H28.589C27.7295 4.23132 26.9215 4.55004 26.3139 5.1283C26.1517 5.28253 26.0106 5.45121 25.8886 5.63014C25.7666 5.45121 25.6255 5.28253 25.4633 5.1283C24.8557 4.55004 24.0477 4.23132 23.1882 4.23132H12.4464V5.87011H10.7231V23.8991H24.0217C24.2677 24.6582 25.011 25.2103 25.8901 25.2103C26.7691 25.2103 27.5125 24.6586 27.7585 23.8991H41.057V5.87011ZM27.0455 5.82305C27.4576 5.43071 28.0059 5.2145 28.589 5.2145H38.2964L38.2797 20.6211H30.4471C29.0344 20.6211 27.6364 20.9873 26.4237 21.6644L26.407 7.29176C26.4065 6.73727 26.6329 6.21586 27.0455 5.82305ZM13.4803 5.21497H23.1877C23.7708 5.21497 24.3191 5.43118 24.7312 5.82352C25.1433 6.21586 25.3702 6.73773 25.3697 7.29223L25.353 21.6653C24.1388 20.9878 22.7413 20.6215 21.3296 20.6215H13.4803V5.21497Z"
                                                fill="#5F2DED" />
                                            <rect x="15" y="8.54175" width="8" height="0.993317" fill="#FFB31F" />
                                            <rect x="28" y="8.54175" width="8" height="0.993317" fill="#FFB31F" />
                                            <rect x="15" y="11.5198" width="8" height="0.993319" fill="#FFB31F" />
                                            <rect x="28" y="11.5198" width="8" height="0.993319" fill="#FFB31F" />
                                        </svg>



                                        <div class="service__bg__img">
                                            <svg class="service__icon__bg" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M63.3775 44.4535C54.8582 58.717 39.1005 53.2202 23.1736 47.5697C7.2467 41.9192 -5.18037 32.7111 3.33895 18.4477C11.8583 4.18418 31.6595 -2.79441 47.5803 2.85105C63.5011 8.49652 71.8609 30.2313 63.3488 44.4865L63.3775 44.4535Z"
                                                    fill="#5F2DED" fill-opacity="0.05" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="service__content service__content__2">
                                        <h3><a href="course-details.html">Machine Learning</a></h3>
                                        <p>Construction is a general term the art and science to form </p>
                                    </div>
                                    <div class="service__button">
                                        <a href="#">View Subject
                                            <i class="icofont-long-arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="service__small__img">
                                        <svg class="icon__hover__img" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.5961 10.265L19 1.33069L10.0022 3.73285L1 6.1306L7.59393 12.6627L14.1879 19.1992L16.5961 10.265Z"
                                                stroke="#FFB31F" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up">
                                <div class="single__service ss_margin">
                                    <div class="service__img">
                                        <svg class="service__icon" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M28.525 44.0499H20.4753C18.7037 44.0499 17.2625 42.7046 17.2625 41.0509C17.2625 36.723 15.7895 32.4935 13.115 29.1417C11.2743 26.835 10.3045 24.0912 10.3103 21.2067C10.3172 17.7711 11.7888 14.4906 14.4541 11.9697C17.1201 9.44796 20.6146 8.03229 24.2939 7.98346C28.1232 7.9323 31.7312 9.28502 34.4566 11.7915C37.1864 14.302 38.6898 17.6547 38.6898 21.2322C38.6898 24.0423 37.7594 26.7272 35.9993 28.9965C33.2113 32.5912 31.7377 36.7597 31.7377 41.0511C31.7377 42.7046 30.2964 44.0499 28.525 44.0499ZM24.5008 10.6603C24.4454 10.6603 24.3904 10.6607 24.3349 10.6614C18.3004 10.7416 13.1927 15.5731 13.1814 21.2117C13.1767 23.5138 13.9501 25.7029 15.418 27.5424C18.4589 31.3533 20.1335 36.1507 20.1335 41.0509C20.1335 41.2278 20.2869 41.3716 20.4752 41.3716H28.5249C28.7133 41.3716 28.8665 41.2278 28.8665 41.051C28.8665 36.1921 30.5286 31.4809 33.6733 27.4265C35.0768 25.6168 35.8187 23.4749 35.8187 21.2321C35.8187 18.3773 34.6191 15.7019 32.4409 13.6987C30.3067 11.7359 27.4925 10.6603 24.5008 10.6603Z"
                                                fill="#5F2DED" />
                                            <path d="M34.5884 35.3186H14.4117V37.9969H34.5884V35.3186Z" fill="#5F2DED" />
                                            <path
                                                d="M23.8501 30.4466L21.4301 29.0054L24.8268 24.0417H21.5536C21.0311 24.0417 20.5498 23.7768 20.297 23.3501C20.0444 22.9235 20.0602 22.4024 20.3384 21.9897L25.0805 14.9543L27.5109 16.38L24.1519 21.3634H27.4464C27.9708 21.3634 28.4533 21.63 28.7053 22.059C28.9573 22.4879 28.9385 23.0109 28.6564 23.4232L23.8501 30.4466Z"
                                                fill="#FFB31F" />
                                            <path d="M25.9355 2.17908H23.0645V6.19654H25.9355V2.17908Z" fill="#5F2DED" />
                                            <path
                                                d="M10.6816 6.93133L8.65027 8.8241L11.6922 11.6649L13.7235 9.77218L10.6816 6.93133Z"
                                                fill="#5F2DED" />
                                            <path
                                                d="M38.3173 6.93027L35.2754 9.77112L37.3067 11.6639L40.3486 8.82304L38.3173 6.93027Z"
                                                fill="#5F2DED" />
                                        </svg>



                                        <div class="service__bg__img">
                                            <svg class="service__icon__bg" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M63.3775 44.4535C54.8582 58.717 39.1005 53.2202 23.1736 47.5697C7.2467 41.9192 -5.18037 32.7111 3.33895 18.4477C11.8583 4.18418 31.6595 -2.79441 47.5803 2.85105C63.5011 8.49652 71.8609 30.2313 63.3488 44.4865L63.3775 44.4535Z"
                                                    fill="#5F2DED" fill-opacity="0.05" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="service__content service__content__2">
                                        <h3><a href="course-details.html">Artist & Design</a></h3>
                                        <p>Construction is a general term the art and science to form </p>
                                    </div>
                                    <div class="service__button">
                                        <a href="#">View Subject
                                            <i class="icofont-long-arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="service__small__img">
                                        <svg class="icon__hover__img" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.5961 10.265L19 1.33069L10.0022 3.73285L1 6.1306L7.59393 12.6627L14.1879 19.1992L16.5961 10.265Z"
                                                stroke="#FFB31F" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="single__service">
                                    <div class="service__img">

                                        <svg class="service__icon" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.30281 28.9536H8.45394C9.05625 28.9536 9.48648 29.5426 9.48648 30.2495V36.8465C9.48648 37.6711 9.05625 38.2602 8.45394 38.2602H6.30281C5.78654 38.2602 5.27026 37.6711 5.27026 36.8465V30.2495C5.27026 29.5426 5.78654 28.9536 6.30281 28.9536Z"
                                                fill="#5F2DED" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M13.7027 23.7833H15.8987C16.4257 23.7833 16.8649 24.4239 16.8649 25.3207V36.7228C16.8649 37.6196 16.4257 38.2602 15.8987 38.2602H13.7027C13.0879 38.2602 12.6487 37.6196 12.6487 36.7228V25.3207C12.6487 24.4239 13.0879 23.7833 13.7027 23.7833Z"
                                                fill="#5F2DED" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M21.0596 19.6471H23.2108C23.727 19.6471 24.2433 20.412 24.2433 21.1769V36.7303C24.2433 37.6227 23.727 38.2602 23.2108 38.2602H21.0596C20.4573 38.2602 20.0271 37.6227 20.0271 36.7303V21.1769C20.0271 20.412 20.4573 19.6471 21.0596 19.6471Z"
                                                fill="#5F2DED" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M28.4381 15.5109H30.5892C31.1055 15.5109 31.6217 16.1499 31.6217 17.0445V36.7265C31.6217 37.6212 31.1055 38.2602 30.5892 38.2602H28.4381C27.8357 38.2602 27.4055 37.6212 27.4055 36.7265V17.0445C27.4055 16.1499 27.8357 15.5109 28.4381 15.5109Z"
                                                fill="#5F2DED" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M26.9989 7.6293L23.05 18.137L20.3744 15.4678C15.622 19.6266 9.96272 22.5976 3.63238 24.2568C1.36694 24.9297 0.353173 21.6176 2.74495 21.0505C8.47735 19.533 13.5443 16.8156 17.8363 13.1279L15.5453 10.8879L26.9989 7.6293Z"
                                                fill="#FFB31F" />
                                        </svg>



                                        <div class="service__bg__img">
                                            <svg class="service__icon__bg" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M63.3775 44.4535C54.8582 58.717 39.1005 53.2202 23.1736 47.5697C7.2467 41.9192 -5.18037 32.7111 3.33895 18.4477C11.8583 4.18418 31.6595 -2.79441 47.5803 2.85105C63.5011 8.49652 71.8609 30.2313 63.3488 44.4865L63.3775 44.4535Z"
                                                    fill="#5F2DED" fill-opacity="0.05" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="service__content service__content__2">
                                        <h3><a href="course-details.html">Artist & Design</a></h3>
                                        <p>Construction is a general term the art and science to form </p>
                                    </div>
                                    <div class="service__button">
                                        <a href="#">View Subject
                                            <i class="icofont-long-arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="service__small__img">
                                        <svg class="icon__hover__img" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.5961 10.265L19 1.33069L10.0022 3.73285L1 6.1306L7.59393 12.6627L14.1879 19.1992L16.5961 10.265Z"
                                                stroke="#FFB31F" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- populer__section__end-->


        <!-- grid__section__start -->
        <div class="gridarea gridarea__2">
            <div class="container">
                <div class="row grid__row">

                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12" data-aos="fade-up">
                        <div class="section__title__2">
                            <div class="section__title__button">
                                <div class="default__small__button">Course List</div>
                            </div>
                            <div class="section__title__heading__2 section__title__heading__3 heading__fontsize__2">
                                <h2>Perfect Online Course Your Carrer</h2>
                            </div>
                        </div>
                    </div>



                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12" data-aos="fade-up">
                        <div class="gridfilter_nav grid__filter__2 gridFilter">
                            <button class="active" data-filter="*">See All </button>
                            <button data-filter=".filter1" class="">Data science </button>
                            <button data-filter=".filter2" class="">Engineering </button>
                            <button data-filter=".filter3" class="">Featured </button>
                            <button data-filter=".filter4" class="">Architecture</button>
                        </div>
                    </div>
                </div>





                <div class="row grid" data-aos="fade-up">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item filter1 filter3">
                        <div class="gridarea__wraper">
                            <div class="gridarea__img">
                                <a href="course-details.html"><img loading="lazy" src="img/grid/grid_1.png"
                                        alt="grid"></a>
                                <div class="gridarea__small__button">
                                    <div class="grid__badge">Data & Tech</div>
                                </div>
                                <div class="gridarea__small__icon">
                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                </div>

                            </div>
                            <div class="gridarea__content">
                                <div class="gridarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-book-alt"></i> 23 Lesson
                                        </li>
                                        <li>
                                            <i class="icofont-clock-time"></i> 1 hr 30 min
                                        </li>
                                    </ul>
                                </div>
                                <div class="gridarea__heading">
                                    <h3><a href="course-details.html">Foundation course to under stand
                                            about softwere</a></h3>
                                </div>
                                <div class="gridarea__price">
                                    $32.00 <del>/ $67.00</del>
                                    <span> <del class="del__2">Free</del></span>

                                </div>
                                <div class="gridarea__bottom">

                                    <a href="instructor-details.html">
                                        <div class="gridarea__small__img">
                                            <img loading="lazy" src="img/grid/grid_small_1.jpg" alt="grid">
                                            <div class="gridarea__small__content">
                                                <h6>Micle Jhon</h6>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="gridarea__star">
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <span>(44)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item filter2 filter3">
                        <div class="gridarea__wraper">
                            <div class="gridarea__img">
                                <img loading="lazy" src="img/grid/grid_2.png" alt="grid">
                                <div class="gridarea__small__button">
                                    <div class="grid__badge blue__color">Mechanical</div>
                                </div>
                                <div class="gridarea__small__icon">
                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                </div>

                            </div>
                            <div class="gridarea__content">
                                <div class="gridarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-book-alt"></i> 29 Lesson
                                        </li>
                                        <li>
                                            <i class="icofont-clock-time"></i> 2 hr 10 min
                                        </li>
                                    </ul>
                                </div>
                                <div class="gridarea__heading">
                                    <h3><a href="#">Nidnies course to under stand
                                            about softwere</a></h3>
                                </div>
                                <div class="gridarea__price green__color">
                                    $32.00<del>/$67.00</del>
                                    <span>.Free</span>

                                </div>
                                <div class="gridarea__bottom">
                                    <a href="instructor-details.html">
                                        <div class="gridarea__small__img">
                                            <img loading="lazy" src="img/grid/grid_small_2.jpg" alt="grid">
                                            <div class="gridarea__small__content">
                                                <h6>Rinis Jhon</h6>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="gridarea__star">
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <span>(44)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item filter4 filter5">
                        <div class="gridarea__wraper">
                            <div class="gridarea__img">
                                <a href="course-details.html"><img loading="lazy" src="img/grid/grid_3.png"
                                        alt="grid"></a>
                                <div class="gridarea__small__button">
                                    <div class="grid__badge pink__color">Development</div>
                                </div>
                                <div class="gridarea__small__icon">
                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                </div>

                            </div>
                            <div class="gridarea__content">
                                <div class="gridarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-book-alt"></i> 25 Lesson
                                        </li>
                                        <li>
                                            <i class="icofont-clock-time"></i> 1 hr 40 min
                                        </li>
                                    </ul>
                                </div>
                                <div class="gridarea__heading">
                                    <h3><a href="course-details.html">Minws course to under stand
                                            about solution</a></h3>
                                </div>
                                <div class="gridarea__price">
                                    $40.00 <del>/ $67.00</del>
                                    <span> <del class="del__2">Free</del></span>

                                </div>
                                <div class="gridarea__bottom">

                                    <a href="instructor-details.html">
                                        <div class="gridarea__small__img">
                                            <img loading="lazy" src="img/grid/grid_small_3.jpg" alt="grid">
                                            <div class="gridarea__small__content">
                                                <h6>Micle Jhon</h6>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="gridarea__star">
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <span>(44)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item filter4">
                        <div class="gridarea__wraper">
                            <div class="gridarea__img">
                                <a href="course-details.html"><img loading="lazy" src="img/grid/grid_4.png"
                                        alt="grid"></a>
                                <div class="gridarea__small__button">
                                    <div class="grid__badge green__color">Ui & UX Design</div>
                                </div>
                                <div class="gridarea__small__icon">
                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                </div>

                            </div>
                            <div class="gridarea__content">
                                <div class="gridarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-book-alt"></i> 36 Lesson
                                        </li>
                                        <li>
                                            <i class="icofont-clock-time"></i> 3 hr 40 min
                                        </li>
                                    </ul>
                                </div>
                                <div class="gridarea__heading">
                                    <h3><a href="course-details.html">Design course to under stand
                                            about solution</a></h3>
                                </div>
                                <div class="gridarea__price">
                                    $40.00 <del>/ $67.00</del>
                                    <span> <del class="del__2">Free</del></span>

                                </div>
                                <div class="gridarea__bottom">

                                    <a href="instructor-details.html">
                                        <div class="gridarea__small__img">
                                            <img loading="lazy" src="img/grid/grid_small_4.jpg" alt="grid">
                                            <div class="gridarea__small__content">
                                                <h6>Micle Robin</h6>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="gridarea__star">
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <span>(44)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item filter1 filter3">
                        <div class="gridarea__wraper">
                            <div class="gridarea__img">
                                <a href="course-details.html"><img loading="lazy" src="img/grid/grid_5.png"
                                        alt="grid"></a>
                                <div class="gridarea__small__button">
                                    <div class="grid__badge orange__color">Data & Tech</div>
                                </div>
                                <div class="gridarea__small__icon">
                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                </div>

                            </div>
                            <div class="gridarea__content">
                                <div class="gridarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-book-alt"></i> 36 Lesson
                                        </li>
                                        <li>
                                            <i class="icofont-clock-time"></i> 3 hr 40 min
                                        </li>
                                    </ul>
                                </div>
                                <div class="gridarea__heading">
                                    <h3><a href="course-details.html">Data course to under stand
                                            about solution</a></h3>
                                </div>
                                <div class="gridarea__price">
                                    $40.00 <del>/ $67.00</del>
                                    <span> <del class="del__2">Free</del></span>

                                </div>
                                <div class="gridarea__bottom">

                                    <a href="instructor-details.html">
                                        <div class="gridarea__small__img">
                                            <img loading="lazy" src="img/grid/grid_small_5.jpg" alt="grid">
                                            <div class="gridarea__small__content">
                                                <h6>Micle Robin</h6>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="gridarea__star">
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <span>(44)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item filter5 filter2">
                        <div class="gridarea__wraper">
                            <div class="gridarea__img">
                                <a href="course-details.html"><img loading="lazy" src="img/grid/grid_6.png"
                                        alt="grid"></a>
                                <div class="gridarea__small__button">
                                    <div class="grid__badge yellow__color">Big Data</div>
                                </div>
                                <div class="gridarea__small__icon">
                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                </div>

                            </div>
                            <div class="gridarea__content">
                                <div class="gridarea__list">
                                    <ul>
                                        <li>
                                            <i class="icofont-book-alt"></i> 30 Lesson
                                        </li>
                                        <li>
                                            <i class="icofont-clock-time"></i> 3 hr 40 min
                                        </li>
                                    </ul>
                                </div>
                                <div class="gridarea__heading">
                                    <h3><a href="course-details.html">Big data to under stand
                                            about solution pacage</a></h3>
                                </div>
                                <div class="gridarea__price">
                                    $40.00 <del>/ $67.00</del>
                                    <span> <del class="del__2">Free</del></span>

                                </div>
                                <div class="gridarea__bottom">

                                    <a href="instructor-details.html">
                                        <div class="gridarea__small__img">
                                            <img loading="lazy" src="img/grid/grid_small_5.jpg" alt="grid">
                                            <div class="gridarea__small__content">
                                                <h6>Micle Robin</h6>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="gridarea__star">
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <span>(44)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- grid__section__end -->

        <!-- register__section__start-->
        <div class="registerarea sp_top_90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12" data-aos="fade-up">
                        <div class="registerarea__wraper">
                            <div class="section__title registerarea__section__title">
                                <div class="section__title__button">
                                    <div class="default__small__button">Course List</div>
                                </div>
                                <div class="section__title__heading heading__underline">
                                    <h2>Register Your <span>Account </span>Get free access to <small>60000</small>
                                        online course
                                    </h2>
                                </div>
                            </div>
                            <div class="registerarea__content">
                                <div class="registerarea__video">
                                    <div class="video__pop__btn">
                                        <a class="video-btn" href="https://www.youtube.com/watch?v=vHdclsdkp28"> <img
                                                loading="lazy" src="img/icon/video.png" alt=""></a>
                                    </div>
                                    <div class="registerarea__para">
                                        <p>Learn Something new & Build Your Career From Anywhere In The World</p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12" data-aos="fade-up">
                        <div class="registerarea__form">
                            <div class="registerarea__form__heading">
                                <h4>Fill Your Registration</h4>
                            </div>
                            <form action="#">
                                <input class="register__input" type="text" placeholder="Your Name">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <input class="register__input" type="text" placeholder="Email Address">
                                    </div>
                                    <div class="col-xl-6">
                                        <input class="register__input" type="text" placeholder="Phone">
                                    </div>
                                </div>
                                <input class="register__input" type="text" placeholder="Address">
                                <textarea class="register__input textarea" name="#" id="#" cols="30" rows="10">Comment</textarea>
                                <div class="registerarea__button">
                                    <a class="default__button" href="#">Sign Up
                                        <i class="icofont-long-arrow-right"></i>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="registerarea__img">
                <img loading="lazy" class="register__1" src="img/register/register__1.png" alt="register">
                <img loading="lazy" class="register__2" src="img/register/register__2.png" alt="register">
                <img loading="lazy" class="register__3" src="img/register/register__3.png" alt="register">
            </div>
        </div>
        <!-- register__section__start-->

        <!-- Learning__section__start -->
        <div class="pricingarea sp_bottom_100 sp_top_90">
            <div class="container">
                <div class="row" data-aos="fade-up">
                    <div class="section__title text-center">
                        <div class="section__title__button">
                            <div class="default__small__button">Pricing Plan</div>
                        </div>
                        <div class="section__title__heading">
                            <h2>Choose The Best Package
                                <br>For your Learning
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" data-aos="fade-up">
                        <div class="pricingarea__content__wraper">
                            <div class="pricingarea__heading">
                                <div class="pricingarea__plan__type">
                                    <h6>FREE</h6>
                                    <img loading="lazy" src="img/icon/price__1.png" alt="">
                                </div>

                                <div class="pricingarea__number">
                                    <h1><span class="price__currency">$</span>0<span class="price__durition">/
                                            month</span></h1>
                                </div>
                                <p>Perfect for startup</p>
                            </div>
                            <div class="pricingarea__list">
                                <ul>
                                    <li>
                                        <i class="icofont-check"></i> 2 user
                                    </li>
                                    <li>
                                        <i class="icofont-check"></i> Learning Scope
                                    </li>
                                    <li>
                                        <i class="icofont-close close__button"></i> Team collaboration
                                    </li>
                                    <li>
                                        <i class="icofont-check dark__color__2"></i> Export HTML code
                                    </li>
                                    <li>
                                        <i class="icofont-check"></i> Upload Your Logo
                                    </li>

                                </ul>
                            </div>
                            <div class="pricingarea__button">
                                <a class="default__button" href="#">Get Started</a>
                            </div>
                            <div class="pricingarea__text">
                                <p>No creadit card required</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" data-aos="fade-up">
                        <div class="pricingarea__content__wraper">
                            <div class="pricingarea__heading">
                                <div class="pricingarea__plan__type">
                                    <h6>BASIC</h6>
                                    <img loading="lazy" src="img/icon/price__2.png" alt="">
                                </div>

                                <div class="pricingarea__number">
                                    <h1><span class="price__currency">$</span>29<span class="price__durition">/
                                            month</span></h1>
                                </div>
                                <p>Perfect for startup</p>
                            </div>
                            <div class="pricingarea__list">
                                <ul>
                                    <li>
                                        <i class="icofont-check"></i> 5 user
                                    </li>
                                    <li>
                                        <i class="icofont-check"></i> Learning Scope
                                    </li>
                                    <li>
                                        <i class="icofont-close close__button"></i> Team collaboration
                                    </li>
                                    <li>
                                        <i class="icofont-check dark__color__2"></i> Export HTML code
                                    </li>
                                    <li>
                                        <i class="icofont-check"></i> Upload Your Logo
                                    </li>

                                </ul>
                            </div>
                            <div class="pricingarea__button pricingarea__button__2">
                                <a class="default__button" href="#">Get Started</a>
                            </div>
                            <div class="pricingarea__text">
                                <p>No creadit card required</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" data-aos="fade-up">
                        <div class="pricingarea__content__wraper">
                            <div class="pricingarea__heading">
                                <div class="pricingarea__plan__type">
                                    <h6>PRO</h6>
                                    <img loading="lazy" src="img/icon/price__3.png" alt="">
                                </div>

                                <div class="pricingarea__number">
                                    <h1><span class="price__currency">$</span>59<span class="price__durition">/
                                            month</span></h1>
                                </div>
                                <p>Perfect for startup</p>
                            </div>
                            <div class="pricingarea__list">
                                <ul>
                                    <li>
                                        <i class="icofont-check"></i> 2 user
                                    </li>
                                    <li>
                                        <i class="icofont-check"></i> Learning Scope
                                    </li>
                                    <li>
                                        <i class="icofont-close close__button"></i> Team collaboration
                                    </li>
                                    <li>
                                        <i class="icofont-check dark__color__2"></i> Export HTML code
                                    </li>
                                    <li>
                                        <i class="icofont-check"></i> Upload Your Logo
                                    </li>

                                </ul>
                            </div>
                            <div class="pricingarea__button">
                                <a class="default__button" href="#">Get Started</a>
                            </div>
                            <div class="pricingarea__text">
                                <p>No creadit card required</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Learning__section__end-->

        <!-- about__section__3__start -->
        <div class="aboutarea__3 testimonial__area__2 sp_bottom_90 sp_top_120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 custom__review__grid" data-aos="fade-up">
                        <div class="section__title aboutarea__3__section__title">
                            <div class="section__title__button">
                                <div class="default__small__button">Course List</div>
                            </div>
                            <div class="section__title__heading">
                                <h2>What They Say
                                    <br>About us
                                </h2>
                            </div>
                        </div>

                        <div class="aboutarea__3__content">
                            <p>Construction is a general term meaning the art and science to form systems organizations
                                and comes from Latin Construction is</p>
                        </div>
                        <div class="aboutarea__3__button">
                            <a class="default__button" href="#">Explore More
                                <i class="icofont-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 custom__review__grid" data-aos="fade-up">
                        <div class="aboutarea__content__wraper__3">
                            <div class="aboutarea__para__3">
                                <p>“The other hand we denounce righteou indg ation men who are so beguiled and demoraliz
                                    by the the mo ment.Dislike men who so development co” </p>
                                <div class="aboutarea__icon__3">
                                    <i class="icofont-quote-left"></i>
                                </div>
                            </div>
                            <div class="aboutarea__img__3">
                                <img loading="lazy" src="img/about/about_5.png" alt="about">
                                <div class="aboutarea__img__name">
                                    <h6>Robind Jon</h6>
                                    <p>Desginer TechBoot</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 custom__review__grid" data-aos="fade-up">
                        <div class="aboutarea__content__wraper__3">
                            <div class="aboutarea__para__3">
                                <p>“The other hand we denounce righteou indg ation men who are so beguiled and demoraliz
                                    by the the mo ment.Dislike men who so development co” </p>
                                <div class="aboutarea__icon__3">
                                    <i class="icofont-quote-left"></i>
                                </div>
                            </div>
                            <div class="aboutarea__img__3">
                                <img loading="lazy" src="img/about/about_5.png" alt="about">
                                <div class="aboutarea__img__name">
                                    <h6>Robind Jon</h6>
                                    <p>Desginer TechBoot</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="aboutarea__img__3">
                <img loading="lazy" class="aboutarea__3__img__1" src="img/about/about_6.png" alt="about">
                <img loading="lazy" class="aboutarea__3__img__2" src="img/about/about_7.png" alt="about">
                <img loading="lazy" class="aboutarea__3__img__3" src="img/about/about_9.png" alt="about">
            </div>
        </div>
        <!-- about__section__3__end -->

        <!-- blog__section__start -->
        <div class="blogarea sp_bottom_70 sp_top_100">
            <div class="container">
                <div class="row" data-aos="fade-up">
                    <div class="col-xl-12">
                        <div class="section__title text-center">
                            <div class="section__title__button">
                                <div class="default__small__button">News & Blogs</div>
                            </div>
                            <div class="section__title__heading">
                                <h2>Leatest News & Blog</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8 col-lg-8" data-aos="fade-up">
                        <div class="blogarea__content__wraper">
                            <div class="blogarea__img">
                                <img loading="lazy" src="img/blog/blog_1.png" alt="blog">
                                <div class="blogarea__date">
                                    20
                                    <span>Oct</span>
                                </div>
                            </div>
                            <div class="blogarea__text__wraper">
                                <h3><a href="#">It is a long established fact that a reader
                                        will be Standard Part</a></h3>
                                <div class="blogarea__para">
                                    <p>A wonderful serenity has taken possssion of my entire souing like these sweet
                                        morning spring whch enjoy with my whole heart I am alone, and feel the charm of
                                        existenceths spot whch was create For the bliss of souls
                                        like mineing am so happy my dear frend so absori bed in the exquste sens of
                                        mere. A wonderful serenity has taken posseson of my entire soung like these
                                        sweet mornngs spring whch enjoy …</p>
                                </div>

                                <div class="blogarea__icon">
                                    <div class="blogarea__person">
                                        <div class="blogarea__img">
                                            <img loading="lazy" src="img/blog/blog_2.png" alt="">
                                        </div>
                                        <div class="blogarea__name">
                                            <span> By</span>: Mirnsdo Jons
                                        </div>
                                    </div>
                                    <div class="blogarea__list">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="icofont-facebook"></i></a>
                                            </li>

                                            <li>
                                                <a href="#"><i class="icofont-youtube-play"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icofont-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icofont-twitter"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4" data-aos="fade-up">
                        <div class="blogarea__content__wraper">
                            <div class="blogarea__img">
                                <img loading="lazy" src="img/blog/blog_3.png" alt="blog">
                                <div class="blogarea__date small__date">
                                    20
                                    <span>Oct</span>
                                </div>
                            </div>
                            <div class="blogarea__text__wraper blogarea__text__wraper__2">
                                <h3><a href="#">It is a long established fact that a reader
                                        will be Standard Part</a></h3>
                            </div>

                        </div>

                        <div class="blogarea__content__wraper">
                            <div class="blogarea__img">
                                <img loading="lazy" src="img/blog/blog_4.png" alt="blog">
                                <div class="blogarea__date small__date">
                                    20
                                    <span>Oct</span>
                                </div>
                            </div>
                            <div class="blogarea__text__wraper blogarea__text__wraper__2">
                                <h3><a href="#">It is a long established fact that a reader
                                        will be Standard Part</a></h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog__section__end -->

    @endsection

    @push('scripts')
    @endpush