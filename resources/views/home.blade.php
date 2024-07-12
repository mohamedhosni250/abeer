@extends('layouts.app')
@section('content')
    <!-- Hero  area start -->
    <div class="banner-two-flow-1920">
        <div class="banner-area-one v-2 bg_image shape-move">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-2">
                        <div class="banner-content-one">
                            <div class="inner">
                                <div class="pre-title-banner">
                                    <img src="{{ asset('images/banner/bulb-3.png') }}" width="22" alt="icon">
                                    <span>Gateway to Lifelong Learning</span>
                                </div>
                                <h1 class="title-banner">
                                    Welcome to Your Online
                                    <span>Learning Journey</span>
                                    <img src="{{ asset('images/banner/06.png') }}" alt="banner">
                                </h1>
                                <p class="disc">We Have 30k+ Online Courses & 300K+ Online Registered Student.</p>
                                {{-- search form start  --}}
                                <div class="container custom-form">
                                    <form action="{{ route('search') }}" method="GET">
                                        <div class="form-row">
                                            <div class="form-group col-md-4 col-12 mb-3 mb-md-0">
                                                <i class="fas fa-chevron-down"></i>
                                                <select required name="degree" class="form-control">
                                                    <option value="" disabled selected>Select Degree</option>
                                                    @foreach ($degrees as $degree)
                                                        <option value="{{ $degree->id }}">{{ $degree->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4 col-12 mb-3 mb-md-0">
                                                <i class="fas fa-chevron-down"></i>
                                                <select required name="department" class="form-control">
                                                    <option value="" disabled selected>Select Faculty</option>
                                                    @foreach ($departments as $department)
                                                        <option value="{{ $department->id }}">{{ $department->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3 col-12">
                                                <button type="submit" class="btn btn-search btn-block mt-md-0 mt-2">
                                                    <i class="fas fa-search"></i> SEARCH
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{-- search form end  --}}
                                <div class="banner-tags-wrapper">
                                    <!-- single tags wrapper -->
                                    <div class="single-tags-banner">
                                        <p>UI/UX Design</p>
                                    </div>
                                    <!-- single tags wrapper end -->
                                    <!-- single tags wrapper -->
                                    <div class="single-tags-banner">
                                        <p>Web Design</p>
                                    </div>
                                    <!-- single tags wrapper end -->
                                    <!-- single tags wrapper -->
                                    <div class="single-tags-banner">
                                        <p>Marketing</p>
                                    </div>
                                    <!-- single tags wrapper end -->
                                    <!-- single tags wrapper -->
                                    <div class="single-tags-banner">
                                        <p>Digital Marketing</p>
                                    </div>
                                    <!-- single tags wrapper end -->
                                    <!-- single tags wrapper -->
                                    <div class="single-tags-banner">
                                        <p>Finance</p>
                                    </div>
                                    <!-- single tags wrapper end -->
                                    <!-- single tags wrapper -->
                                    <div class="single-tags-banner">
                                        <p>Dancing</p>
                                    </div>
                                    <!-- single tags wrapper end -->
                                    <!-- single tags wrapper -->
                                    <div class="single-tags-banner">
                                        <p>Lifestyle</p>
                                    </div>
                                    <!-- single tags wrapper end -->
                                    <!-- single tags wrapper -->
                                    <div class="single-tags-banner">
                                        <p>Music</p>
                                    </div>
                                    <!-- single tags wrapper end -->
                                    <!-- single tags wrapper -->
                                    <div class="single-tags-banner">
                                        <p>Business</p>
                                    </div>
                                    <!-- single tags wrapper end -->
                                    <!-- single tags wrapper -->
                                    <div class="single-tags-banner">
                                        <p>SEO</p>
                                    </div>
                                    <!-- single tags wrapper end -->
                                    <!-- single tags wrapper -->
                                    <div class="single-tags-banner">
                                        <p>Java</p>
                                    </div>
                                    <!-- single tags wrapper end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-1">
                        <div class="banner-right-img">
                            <img src="{{ asset('images/banner/05.png') }}" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
            <div class="review-thumb">
                <!-- single review -->
                <div class="review-single">
                    <img src="{{ asset('images/banner/07.png') }}" alt="banner">
                    <div class="info-right">
                        <h6 class="title">4.5</h6>
                        <span>(2.4k Review)</span>
                    </div>
                </div>
                <!-- single review end -->
                <!-- single review -->
                <div class="review-single two">
                    <img src="{{ asset('images/banner/08.png') }}" alt="banner">
                    <div class="info-right">
                        <h6 class="title">100+</h6>
                        <span>Online Course</span>
                    </div>
                </div>
                <!-- single review end -->
            </div>
            <!-- banner shape area two -->
            <div class="banner-shape-area-two shape-image">
                <img src="{{ asset('images/banner/shape/16.png') }}" data-speed="0.04" alt="one" class="shape one">
                <img src="{{ asset('images/banner/shape/17.png') }}" data-speed="0.04" data-revert="true" alt="two"
                    class="shape two">
                <img src="{{ asset('images/banner/shape/18.png') }}" data-speed="0.04" alt="three" class="shape three">
                <img src="{{ asset('images/banner/shape/19.png') }}" data-speed="0.04" data-revert="true" alt="four"
                    class="shape four">
            </div>
            <!-- banner shape area two end -->
        </div>
    </div>

    <!-- banner area end -->
    <!-- offer add section area start -->
    <div style="margin-top: 50px;" class="offer-add-area rts-section-gapBottom">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="course-add-single-one bg_image bg-p">
                        <div class="title-area-left-style">
                            <div class="pre-title">
                                <img src="images/banner/bulb-4.png" alt="icon">
                                <span>New Course </span>
                            </div>
                            <h2 class="title">Enroll Now and Save Big <br> on Quality Learning</h2>
                            <a href="course-five.html" class="rts-btn btn-primary-white">View Course</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="course-add-single-one bg_image bg-y">
                        <div class="title-area-left-style">
                            <div class="pre-title">
                                <img src="images/banner/bulb-5.png" alt="icon">
                                <span>New Course </span>
                            </div>
                            <h2 class="title">Limited-Time Offer: Enroll <br> Today for Big Savings</h2>
                            <a href="course-five.html" class="rts-btn btn-primary hov--white">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offer add section area end -->

    <!-- course area start -->
    <div class="course-area-two rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container text-center mt-5">
                        <h2 class="headline">
                            <span class="support-text"> </span><br> Our Featured <span
                                class="highlight">Universities</span>
                        </h2>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="swiper mySwiper-category-1 swiper-float-right-course swiper-data"
                    data-swiper='{
                    "spaceBetween":30,
                    "slidesPerView":2,
                    "loop": true,
                    "autoplay":{
                        "delay":"300000"
                    },
                    "navigation":{
                        "nextEl":".swiper-button-next",
                        "prevEl":".swiper-button-prev"
                    },
                    "pagination":{
                        "el": ".swiper-pagination",
                        "clickable": "true"
                    },
                    "breakpoints":{
                    "320":{
                        "slidesPerView":1,
                        "spaceBetween":30},
                    "420":{
                        "slidesPerView":1,
                        "spaceBetween":30},
                    "500":{
                        "slidesPerView":2,
                        "spaceBetween":30},
                    "740":{
                        "slidesPerView":2,
                        "spaceBetween":30},
                    "940":{
                        "slidesPerView":3,
                        "spaceBetween":30},
                    "1240":{
                        "slidesPerView":3,
                        "spaceBetween":30}
                    }
                }'>
                    <div class="swiper-wrapper">
                        @foreach ($universities as $university)
                            <div class="swiper-slide">
                                <!-- single course style two -->
                                <div class="rts-single-course">
                                    <a href="{{ route('university.show', $university->slug) }}" class="thumbnail">
                                        <img src="{{ $university->featured_image_url }}" alt="course">
                                    </a>
                                    <div class="avatar-wrapper">
                                        <img src="{{ $university->logo_url }}" alt="teacher avatar"
                                            class="teacher-avatar">
                                    </div>ع
                                    <div class="University-bottom">
                                        <a href="{{ route('university.show', $university->slug) }}">
                                            <h5 class="card-title title">{{ $university->name }}</h5>
                                        </a>
                                        <div class="lesson-studente">
                                            <div class="lesson">
                                                <i class="fa-light fa-calendar-lines-pen"></i>
                                                <span>{{ $university->programs_count }} Programs</span>
                                            </div>
                                            <div class="lesson">
                                                <i class="fa-light fa-user-group"></i>
                                                <span>{{ $university->students_count }} Students</span>
                                            </div>
                                            <div class="lesson">
                                                <i class="fa-light fa-user-group"></i>
                                                <span>{{ $university->rating }} Students</span>
                                            </div>
                                        </div>
                                        <p style="font-size: 18px;">Start From <span
                                                style="color: #00B6ED; font-weight: bold;">${{ $university->starting_fee }}</span>
                                            per year </p>
                                        <div style="justify-content: flex-end;" class="tags-area-wrapper">
                                            <div class="single-price">
                                                <span>Read More </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single course style two end -->
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                    <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- course area end -->

    <!-- why choose us section area start -->
    <div class="why-choose-us bg-blue bg-choose-us-one bg_image rts-section-gap shape-move">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-us-area-image pb--50">
                        <img class="one" src="{{ asset('images/why-choose/02.jpg') }}" alt="why-choose">
                        <div class="border-img">
                            <img class="two ml--20" src="{{ asset('images/why-choose/03.jpg') }}" alt="why-choose">
                        </div>
                        <div class="circle-animation">
                            <a class="uni-circle-text uk-background-white dark:uk-background-gray-80 uk-box-shadow-large uk-visible@m"
                                href="#view_in_opensea">
                                <svg class="uni-circle-text-path uk-text-secondary uni-animation-spin"
                                    viewBox="0 0 100 100" width="140" height="140">
                                    <defs>
                                        <path id="circle" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0">
                                        </path>
                                    </defs>
                                    <text font-size="11.2">
                                        <textPath xlink:href="#circle">About University • About College •</textPath>
                                    </text>
                                </svg>
                                <i class="fa-regular fa-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl--90 mt_md--50 mt_sm--20 pl_md--15 pl_sm--10">
                    <div class="title-area-left-style">
                        <div class="pre-title">
                            <img src="{{ asset('images/banner/bulb-2.png') }}" alt="icon">
                            <span>Why Choose Us</span>
                        </div>
                        <h2 class="title">Studyhub Your Path to Excellence & Success</h2>
                        <p class="post-title">We are passionate about education and dedicated to providing high- <br>
                            quality learning resources for learners of all backgrounds.</p>
                    </div>
                    <div class="why-choose-main-wrapper-1">
                        <!-- single choose reason -->
                        <div class="single-choose-reason-1">
                            <div class="icon">
                                <img src="{{ asset('images/why-choose/icon/01.png') }}" alt="icon">
                            </div>
                            <h6 class="title">Expert Instructors
                            </h6>
                        </div>
                        <!-- single choose reason end -->
                        <!-- single choose reason -->
                        <div class="single-choose-reason-1">
                            <div class="icon">
                                <img src="{{ asset('images/why-choose/icon/02.png') }}" alt="icon">
                            </div>
                            <h6 class="title">Interactive Learning
                            </h6>
                        </div>
                        <!-- single choose reason end -->
                        <!-- single choose reason -->
                        <div class="single-choose-reason-1">
                            <div class="icon">
                                <img src="{{ asset('images/why-choose/icon/03.png') }}" alt="icon">
                            </div>
                            <h6 class="title">Affordable Learning
                            </h6>
                        </div>
                        <!-- single choose reason end -->
                        <!-- single choose reason -->
                        <div class="single-choose-reason-1">
                            <div class="icon">
                                <img src="{{ asset('images/why-choose/icon/04.png') }}" alt="icon">
                            </div>
                            <h6 class="title">Career Advance
                            </h6>
                        </div>
                        <!-- single choose reason end -->
                        <!-- single choose reason -->
                        <div class="single-choose-reason-1">
                            <div class="icon">
                                <img src="{{ asset('images/why-choose/icon/05.png') }}" alt="icon">
                            </div>
                            <h6 class="title">Course Selection
                            </h6>
                        </div>
                        <!-- single choose reason end -->
                        <!-- single choose reason -->
                        <div class="single-choose-reason-1">
                            <div class="icon">
                                <img src="{{ asset('images/why-choose/icon/06.png') }}" alt="icon">
                            </div>
                            <h6 class="title">Support Community
                            </h6>
                        </div>
                        <!-- single choose reason end -->
                    </div>
                    <a href="course-five.html" class="rts-btn btn-primary-white with-arrow">View All Course <i
                            class="fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="shape-image">
            <div class="shape one" data-speed="0.04" data-revert="true"><img src="{{ asset('images/banner/15.png') }}"
                    alt="">
            </div>
            <div class="shape two" data-speed="0.04"><img src="{{ asset('images/banner/shape/banner-shape02-w.svg') }}"
                    alt="">
            </div>
            <div class="shape three" data-speed="0.04" data-revert="true"><img
                    src="{{ asset('images/banner/16.png') }}" alt="">
            </div>
        </div>
    </div>

    <!-- why choose us section area end -->

    <!-- join our team area start -->
    <div class="join-our-team-area v-1 rts-section-gap shape-move">
        <!-- join our team area start -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail-jointeam-one pl--70">
                        <img src="{{ asset('images/instructor/02.png') }}" alt="join">
                        <div class="shape-area-one shape-image">
                            <img src="{{ asset('images/instructor/shape/01.png') }}" alt="shape" data-speed="0.04"
                                class="shape one">
                            <img src="{{ asset('images/instructor/shape/02.png') }}" alt="shape" data-speed="0.04"
                                data-revert="true" class="shape two">
                            <img src="{{ asset('images/instructor/shape/03.png') }}" alt="shape" data-speed="0.04"
                                class="shape three">
                            <img src="{{ asset('images/instructor/shape/04.png') }}" alt="shape" data-speed="0.04"
                                data-revert="true" class="shape four">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="title-area-left-style">
                        <div class="pre-title">
                            <img src="{{ asset('images/banner/bulb.png') }}" alt="icon">
                            <span>Join Our Team</span>
                        </div>
                        <h2 class="title">Join Us Become an Instructor <br> & Inspire Learning</h2>
                        <p class="post-title">As an instructor with us, you'll have the opportunity to inspire, guide,
                            and mentor our diverse community of students. Whether you're an industry expert, an academic
                            guru, or an experienced professional</p>
                        <div class="accordion mt--30" id="accordionExample">

                            <!-- accordion -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Accordion Item #1
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we use
                                        to style each element. These classes control the overall appearance,
                                        as well as the showing and hiding via CSS transitions. You can modify any of
                                        this with custom CSS or overriding our default variables. It's also worth
                                        noting that just about any HTML can go within the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Accordion Item #2
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use
                                        to style each element. These classes control the overall appearance, as well as
                                        the showing and hiding via CSS transitions. You can modify any of this with
                                        custom CSS or overriding our default variables. It's also worth noting that
                                        just about any HTML can go within the <code>.accordion-body</code>, though the
                                        transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Accordion Item #3
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use
                                        to style each element. These classes control the overall appearance, as well as
                                        the showing and hiding via CSS transitions. You can modify any of this with
                                        custom CSS or overriding our default variables. It's also worth noting that
                                        just about any HTML can go within the <code>.accordion-body</code>, though the
                                        transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="become-instructor.html" class="rts-btn btn-primary with-arrow">Join Us <i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="shape-area shape-image">
                <img src="{{ asset('images/instructor/shape/05.png') }}" data-speed="0.04" alt="shape"
                    class="shape">
            </div>
        </div>
    </div>
    <!-- join our team area end -->
    {{-- numbers --}}
    <div class="fun-facts-area-1 shape-move bg_image ptb--50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="fun-facts-main-wrapper-1">
                        <!-- single  -->
                        <div class="single-fun-facts">
                            <div class="icon">
                                <img src="{{ asset('images/fun-facts/01.svg') }}" alt="icon">
                            </div>
                            <h5 class="title"><span class="counter">65,972</span></h5>
                            <span class="enr">Students Enrolled</span>
                        </div>
                        <!-- single end -->
                        <!-- single  -->
                        <div class="single-fun-facts">
                            <div class="icon">
                                <img src="{{ asset('images/fun-facts/02.svg') }}" alt="icon">
                            </div>
                            <h5 class="title"><span class="counter">5,321</span></h5>
                            <span class="enr">Completed Course</span>
                        </div>
                        <!-- single end -->
                        <!-- single  -->
                        <div class="single-fun-facts">
                            <div class="icon">
                                <img src="{{ asset('images/fun-facts/03.svg') }}" alt="icon">
                            </div>
                            <h5 class="title"><span class="counter">44,239</span></h5>
                            <span class="enr">Students Learner</span>
                        </div>
                        <!-- single end -->
                        <!-- single  -->
                        <div class="single-fun-facts">
                            <div class="icon">
                                <img src="{{ asset('images/fun-facts/04.svg') }}" alt="icon">
                            </div>
                            <h5 class="title"><span class="counter">75,992</span></h5>
                            <span class="enr">Students Enrolled</span>
                        </div>
                        <!-- single end -->
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-image">
            <div class="shape one" data-speed="0.04" data-revert="true">
                <img src="{{ asset('images/banner/15.png') }}" alt="">
            </div>
            <div class="shape three" data-speed="0.04">
                <img src="{{ asset('images/banner/16.png') }}" alt="">
            </div>
        </div>
    </div>

    <!-- fun facts area end -->

    <!-- rts testimonials area  -->
    <div class="testimonials-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-center-style">
                        <div class="pre-title">
                            <img src="images/banner/bulb.png" alt="icon">
                            <span>Student Review</span>
                        </div>
                        <h2 class="title">Our Students Feedback</h2>
                        <p class="post-title">You'll find something to spark your curiosity and enhance</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full mt--50">
            <div class="row">
                <div class="col-lg-12">
                    <div class="marque-main-wrapper-parent-flex">
                        <div class="marquree-wrapper-1">
                            <!-- single testimonials-area -->
                            <div class="single-testimonials-area-1">
                                <div class="stars-area">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p class="disc">
                                    I can't recommend The Gourmet Haven enough. It's a place for special occasions,
                                    date nights, or whenever you're in the mood for a culinary.
                                </p>
                                <div class="feedback-author">
                                    <img src="images/students-feedback/02.png" alt="students-feedback">
                                    <div class="information">
                                        <h5 class="title">Emma Elizabeth</h5>
                                        <span>Assistant Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonials-area end -->
                            <!-- single testimonials-area -->
                            <div class="single-testimonials-area-1">
                                <div class="stars-area">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p class="disc">
                                    I can't recommend The Gourmet Haven enough. It's a place for special occasions,
                                    date nights, or whenever you're in the mood for a culinary.
                                </p>
                                <div class="feedback-author">
                                    <img src="images/students-feedback/03.png" alt="students-feedback">
                                    <div class="information">
                                        <h5 class="title">Jack Benjamin</h5>
                                        <span>Assistant Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonials-area end -->
                            <!-- single testimonials-area -->
                            <div class="single-testimonials-area-1">
                                <div class="stars-area">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p class="disc">
                                    I can't recommend The Gourmet Haven enough. It's a place for special occasions,
                                    date nights, or whenever you're in the mood for a culinary.
                                </p>
                                <div class="feedback-author">
                                    <img src="images/students-feedback/04.png" alt="students-feedback">
                                    <div class="information">
                                        <h5 class="title">Samuel John </h5>
                                        <span>Assistant Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonials-area end -->
                            <!-- single testimonials-area -->
                            <div class="single-testimonials-area-1">
                                <div class="stars-area">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p class="disc">
                                    I can't recommend The Gourmet Haven enough. It's a place for special occasions,
                                    date nights, or whenever you're in the mood for a culinary.
                                </p>
                                <div class="feedback-author">
                                    <img src="images/students-feedback/05.png" alt="students-feedback">
                                    <div class="information">
                                        <h5 class="title">Samantha Willow</h5>
                                        <span>Assistant Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonials-area end -->
                        </div>
                        <div class="marquree-wrapper-1">
                            <!-- single testimonials-area -->
                            <div class="single-testimonials-area-1">
                                <div class="stars-area">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p class="disc">
                                    I can't recommend The Gourmet Haven enough. It's a place for special occasions,
                                    date nights, or whenever you're in the mood for a culinary.
                                </p>
                                <div class="feedback-author">
                                    <img src="images/students-feedback/06.png" alt="students-feedback">
                                    <div class="information">
                                        <h5 class="title">Emma Elizabeth</h5>
                                        <span>Assistant Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonials-area end -->
                            <!-- single testimonials-area -->
                            <div class="single-testimonials-area-1">
                                <div class="stars-area">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p class="disc">
                                    I can't recommend The Gourmet Haven enough. It's a place for special occasions,
                                    date nights, or whenever you're in the mood for a culinary.
                                </p>
                                <div class="feedback-author">
                                    <img src="images/students-feedback/07.png" alt="students-feedback">
                                    <div class="information">
                                        <h5 class="title">Emma Elizabeth</h5>
                                        <span>Assistant Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonials-area end -->
                            <!-- single testimonials-area -->
                            <div class="single-testimonials-area-1">
                                <div class="stars-area">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p class="disc">
                                    I can't recommend The Gourmet Haven enough. It's a place for special occasions,
                                    date nights, or whenever you're in the mood for a culinary.
                                </p>
                                <div class="feedback-author">
                                    <img src="images/students-feedback/08.png" alt="students-feedback">
                                    <div class="information">
                                        <h5 class="title">Emma Elizabeth</h5>
                                        <span>Assistant Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonials-area end -->
                            <!-- single testimonials-area -->
                            <div class="single-testimonials-area-1">
                                <div class="stars-area">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p class="disc">
                                    I can't recommend The Gourmet Haven enough. It's a place for special occasions,
                                    date nights, or whenever you're in the mood for a culinary.
                                </p>
                                <div class="feedback-author">
                                    <img src="images/students-feedback/09.png" alt="students-feedback">
                                    <div class="information">
                                        <h5 class="title">Emma Elizabeth</h5>
                                        <span>Assistant Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonials-area end -->
                        </div>
                    </div>
                    <div class="marque-main-wrapper-parent-flex">
                        <div class="marquree-wrapper-2">
                            <!-- single testimonials-area -->
                            <div class="single-testimonials-area-1">
                                <div class="stars-area">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p class="disc">
                                    I can't recommend The Gourmet Haven enough. It's a place for special occasions,
                                    date nights, or whenever you're in the mood for a culinary.
                                </p>
                                <div class="feedback-author">
                                    <img src="images/students-feedback/02.png" alt="students-feedback">
                                    <div class="information">
                                        <h5 class="title">Emma Elizabeth</h5>
                                        <span>Assistant Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonials-area end -->
                            <!-- single testimonials-area -->
                            <div class="single-testimonials-area-1">
                                <div class="stars-area">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p class="disc">
                                    I can't recommend The Gourmet Haven enough. It's a place for special occasions,
                                    date nights, or whenever you're in the mood for a culinary.
                                </p>
                                <div class="feedback-author">
                                    <img src="images/students-feedback/03.png" alt="students-feedback">
                                    <div class="information">
                                        <h5 class="title">Jack Benjamin</h5>
                                        <span>Assistant Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonials-area end -->
                            <!-- single testimonials-area -->
                            <div class="single-testimonials-area-1">
                                <div class="stars-area">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p class="disc">
                                    I can't recommend The Gourmet Haven enough. It's a place for special occasions,
                                    date nights, or whenever you're in the mood for a culinary.
                                </p>
                                <div class="feedback-author">
                                    <img src="images/students-feedback/04.png" alt="students-feedback">
                                    <div class="information">
                                        <h5 class="title">Samuel John </h5>
                                        <span>Assistant Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonials-area end -->
                            <!-- single testimonials-area -->
                            <div class="single-testimonials-area-1">
                                <div class="stars-area">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p class="disc">
                                    I can't recommend The Gourmet Haven enough. It's a place for special occasions,
                                    date nights, or whenever you're in the mood for a culinary.
                                </p>
                                <div class="feedback-author">
                                    <img src="images/students-feedback/05.png" alt="students-feedback">
                                    <div class="information">
                                        <h5 class="title">Samantha Willow</h5>
                                        <span>Assistant Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonials-area end -->
                        </div>
                        <div class="marquree-wrapper-2">
                            <!-- single testimonials-area -->
                            <div class="single-testimonials-area-1">
                                <div class="stars-area">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p class="disc">
                                    I can't recommend The Gourmet Haven enough. It's a place for special occasions,
                                    date nights, or whenever you're in the mood for a culinary.
                                </p>
                                <div class="feedback-author">
                                    <img src="images/students-feedback/06.png" alt="students-feedback">
                                    <div class="information">
                                        <h5 class="title">Emma Elizabeth</h5>
                                        <span>Assistant Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonials-area end -->
                            <!-- single testimonials-area -->
                            <div class="single-testimonials-area-1">
                                <div class="stars-area">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p class="disc">
                                    I can't recommend The Gourmet Haven enough. It's a place for special occasions,
                                    date nights, or whenever you're in the mood for a culinary.
                                </p>
                                <div class="feedback-author">
                                    <img src="images/students-feedback/07.png" alt="students-feedback">
                                    <div class="information">
                                        <h5 class="title">Emma Elizabeth</h5>
                                        <span>Assistant Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonials-area end -->
                            <!-- single testimonials-area -->
                            <div class="single-testimonials-area-1">
                                <div class="stars-area">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p class="disc">
                                    I can't recommend The Gourmet Haven enough. It's a place for special occasions,
                                    date nights, or whenever you're in the mood for a culinary.
                                </p>
                                <div class="feedback-author">
                                    <img src="images/students-feedback/08.png" alt="students-feedback">
                                    <div class="information">
                                        <h5 class="title">Emma Elizabeth</h5>
                                        <span>Assistant Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonials-area end -->
                            <!-- single testimonials-area -->
                            <div class="single-testimonials-area-1">
                                <div class="stars-area">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <p class="disc">
                                    I can't recommend The Gourmet Haven enough. It's a place for special occasions,
                                    date nights, or whenever you're in the mood for a culinary.
                                </p>
                                <div class="feedback-author">
                                    <img src="images/students-feedback/09.png" alt="students-feedback">
                                    <div class="information">
                                        <h5 class="title">Emma Elizabeth</h5>
                                        <span>Assistant Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonials-area end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts testimonials area end -->

    <!-- brand area start -->
    <div class="brand-area-one pb--150">
        <div class="container">
            <div class="row pb--60">
                <div class="col-lg-12">
                    <div class="brand-style-one ">
                        <div class="left-title">
                            <h6 class="title">Trusted by:</h6>
                        </div>
                        <div class="swiper mySwiper-category-1 swiper-data"
                            data-swiper='{
                            "spaceBetween":30,
                            "slidesPerView":6,
                            "loop": true,
                            "speed": 1500,
                            "autoplay":{
                                "delay":"4000"
                            },
                            "breakpoints":{
                            "320":{
                                "slidesPerView":2,
                                "spaceBetween":30},
                            "480":{
                                "slidesPerView":3,
                                "spaceBetween":30},
                            "640":{
                                "slidesPerView":4,
                                "spaceBetween":30},
                            "840":{
                                "slidesPerView":4,
                                "spaceBetween":30},
                            "1140":{
                                "slidesPerView":6,
                                "spaceBetween":30}
                            }
                        }'>
                            <div class="swiper-wrapper">
                                <!-- single swiper style -->
                                <div class="swiper-slide">
                                    <div class="brand-area">
                                        <img src="images/brand/08.svg" alt="brand">
                                    </div>
                                </div>
                                <!-- single swiper style -->
                                <!-- single swiper style -->
                                <div class="swiper-slide">
                                    <div class="brand-area">
                                        <img src="images/brand/09.svg" alt="brand">
                                    </div>
                                </div>
                                <!-- single swiper style -->
                                <!-- single swiper style -->
                                <div class="swiper-slide">
                                    <div class="brand-area">
                                        <img src="images/brand/10.svg" alt="brand">
                                    </div>
                                </div>
                                <!-- single swiper style -->
                                <!-- single swiper style -->
                                <div class="swiper-slide">
                                    <div class="brand-area">
                                        <img src="images/brand/11.svg" alt="brand">
                                    </div>
                                </div>
                                <!-- single swiper style -->
                                <!-- single swiper style -->
                                <div class="swiper-slide">
                                    <div class="brand-area">
                                        <img src="images/brand/12.svg" alt="brand">
                                    </div>
                                </div>
                                <!-- single swiper style -->
                                <!-- single swiper style -->
                                <div class="swiper-slide">
                                    <div class="brand-area">
                                        <img src="images/brand/13.svg" alt="brand">
                                    </div>
                                </div>
                                <!-- single swiper style -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="call-to-sction bg_image shape-move">
                    <div class="title-area-left-style">
                        <div class="pre-title">
                            <img src="images/banner/bulb-2.png" alt="icon">
                            <span>Downloads App</span>
                        </div>
                        <h2 class="title mb--25">Build your Skills Certificate From <br> the Studyhub Online
                            course
                        </h2>
                        <div class="finding-source">
                            <a href="#">
                                <img src="images/cta/01.svg" alt="cta-one">
                            </a>
                            <a href="#">
                                <img src="images/cta/02.svg" alt="cta-one">
                            </a>
                        </div>
                    </div>
                    <div class="image-right">
                        <img src="images/cta/03.png" alt="cta-main">
                    </div>
                    <div class="banner-shape-area-two shape-image">
                        <img src="images/cta/03.svg" data-speed="0.04" alt="one" class="shape one"
                            style="transform: matrix(1, 0, 0, 1, 12.26, 15.78);">
                        <img src="images/cta/05.svg" data-speed="0.04" data-revert="true" alt="two"
                            class=" shape two" style="transform: matrix(1, 0, 0, 1, -10.26, -13.78);">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand area end -->
@endsection
