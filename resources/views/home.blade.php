@extends('layouts.main')
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
                                    Uncover Your
                                    Talents
                                    <br>
                                    <span>Abeed Education</span>
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
                                                <button type="submit" class=" btn apply-btn btn-block mt-md-0 mt-2">
                                                    <i class="fas fa-search"></i> SEARCH
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{-- search form end  --}}
                                <div class="banner-tags-wrapper">
                                    <!-- single tags wrapper -->
                                    @foreach ($departments->take(4) as $department)
                                        <div class="single-tags-banner">
                                            <p>{{ $department->name }}</p>
                                        </div>
                                    @endforeach

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
                                    </div>
                                    <div class="University-bottom">
                                        <a href="{{ route('university.show', $university->slug) }}">
                                            <h5 class="card-title title">{{ $university->name }}</h5>
                                        </a>
                                        <div style="    margin-top: 9%;" class="lesson-studente">
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
                                        <p style="font-size: 18px; font-weight:bold">Start From <span
                                                style="color: #0B3A5B; font-weight: bold;">${{ $university->starting_fee }}</span>
                                            per year </p>


                                        <div style="justify-content: flex-end;" class="tags-area-wrapper">
                                            <div class="single-price">
                                                <a href="{{ route('university.show', $university->slug) }}"> <span> Choose
                                                        Program
                                                    </span></a>
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
                        <h2 class="title"> Your Path to Excellence & Success with ABEER EDUCATION
                        </h2>
                        <p class="post-title">Our beloved students are at the heart of everything we do at Abeer Education.
                            We are committed to ensuring the utmost quality in the services we provide, understanding that
                            consistent excellence is the cornerstone of our success. Abeer Education Education offers a
                            comprehensive range of services that cover all aspects of education, leaving no stone unturned.
                        </p>
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
                    <a href="{{ route('universities.index') }}" class="rts-btn btn-primary-white with-arrow">View All
                        Universities <i class="fa-regular fa-arrow-right"></i></a>
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
                        <img width="100%" src="{{ asset('images/instructor/02.png') }}" alt="join">
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
                        <h2 class="title">Join Us to Inspire & Learning <br>At Abeer Education </h2>

                        <div class="accordion mt--30" id="accordionExample">

                            <!-- Accordion Item 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        # Academic Consulting
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Expert Advice for Your Academic Journey</strong>
                                        <p>Our team of academic advisors will help guide you on your unique academic
                                            journey. We can help you find courses and programs that align with your
                                            interests, goals, and budget. Let’s start this journey together.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion Item 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        # University Acceptance
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Easy University Acceptance Process</strong>
                                        <p>We make applying to universities abroad easy with expert assistance. Our
                                            streamlined process ensures students get acceptance letters quickly. We can even
                                            secure partial scholarships for qualified candidates with our connections to
                                            Malaysian universities.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        # Visa Assistance
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Stress-free Visa Assistance and Monitoring</strong>
                                        <p>We’re here to help you with the visa process. We’ll handle the paperwork and keep
                                            you updated on your application. Our aim is to make visa approval stress-free.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        # Warm Welcome
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Welcome to beautiful Malaysia!</strong>
                                        <p>Upon the arrival of students in Malaysia, we extend a warm and friendly welcome.
                                            Our team will provide airport transfers and essential support during their
                                            initial days, ensuring a comfortable settling experience as they gear up towards
                                            their academic pursuits.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        # Seamless Registration
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Simplified University Enrollment</strong>
                                        <p>Enrolling in a Malaysian university with us is easy and hassle-free! We’ll guide
                                            you from registration to settling into campus life, ensuring a smooth transition
                                            and successful academic journey.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 6 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        # Suitable Accommodation
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Finding the Perfect Place to Stay</strong>
                                        <p>Find a comfy place to stay while studying in Malaysia. Our team will ensure you
                                            have a safe and convenient home on or near campus, so you can focus on your
                                            studies stress-free.</p>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <a class="hosni-button">
                            <div class="svg-wrapper-1">
                                <div class="svg-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="currentColor"
                                            d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <span>Learn More </span>
                        </a>
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
    <div class="fun-facts-area-1 shape-move bg_image ptb--50 rts-section-gap">
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
    <div class="row mt--50 rts-section-gap">
        <div class="col-lg-12">
            <div class="swiper-feedback-wrapper-5">
                <div class="swiper swiper-data"
                    data-swiper='{
                    "spaceBetween":30,
                    "slidesPerView":3,
                    "loop": true,
                    "navigation":{
                        "nextEl":".swiper-button-next",
                        "prevEl":".swiper-button-prev"
                    },
                    "pagination":{
                        "el":".swiper-pagination",
                        "clickable":true
                    },
                    "autoplay":{
                        "delay":2000
                    },
                    "breakpoints":{
                        "320":{
                            "slidesPerView":1,
                            "spaceBetween":30
                        },
                        "480":{
                            "slidesPerView":1,
                            "spaceBetween":30
                        },
                        "640":{
                            "slidesPerView":2,
                            "spaceBetween":30
                        },
                        "940":{
                            "slidesPerView":2,
                            "spaceBetween":30
                        },
                        "1140":{
                            "slidesPerView":3,
                            "spaceBetween":30
                        }
                    }
                }'>
                    <div class="swiper-wrapper">
                        @foreach ($reviews as $review)
                            <div class="swiper-slide">
                                <!-- single students feedback area start -->
                                <div class="single-students-feedback-5">
                                    <div class="stars">
                                        @for ($i = 0; $i < 5; $i++)
                                            @if ($i < $review->rating)
                                                <i class="fa-solid fa-star"></i>
                                            @else
                                                <i class="fa-regular fa-star"></i>
                                            @endif
                                        @endfor
                                    </div>
                                    <p class="disc">
                                        {{ $review->content }}
                                    </p>
                                    <div class="authore-area">
                                        <img width="100px" src="{{ asset($review->image) }}" alt="feedback">
                                        <div class="author">
                                            <h6 class="title">{{ $review->author }}</h6>
                                            <span>Student</span>
                                        </div>
                                    </div>
                                    <div class="quote">
                                        <img src="images/students-feedback/19.png" alt="feedback">
                                    </div>
                                </div>
                                <!-- single students feedback area end -->
                            </div>
                        @endforeach
                    </div>
                    <div class="left-align-arrow-btn">
                        <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                        <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>
    </div>


    <!-- rts testimonials area end -->
    <div class="rts-blog-area">
        <div class="container pb--130">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-center-style">
                        <div class="pre-title">
                            <img src="images/banner/globe.png" alt="icon">
                            <span>News & Article</span>
                        </div>
                        <h2 class="title">Read Our Latest News</h2>
                        <p class="post-title"> Our mission is to provide you with valuable insights</p>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                @foreach ($latestBlogs as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div style="padding:0 " class="single-blog-style-one">
                            <a href="{{ route('post.show', $blog->slug) }}" class="thumbnail">
                                <img src="{{ asset($blog->thumbnail_url) }}" alt="{{ $blog->title }}">
                                <div class="tags-area">
                                    <span>Abeer Education</span>
                                </div>
                            </a>
                            <div style="    padding: 0px 20px 10px 20px;" class="post-body">
                                <div class="blog-top-area">
                                    <div class="single">
                                        <i class="fa-light fa-calendar-days"></i>
                                        <p>{{ $blog->created_at->format('F d, Y') }}</p>
                                    </div>
                                    <div class="single">
                                        <i class="fa-light fa-user"></i>
                                        <p>{{ $blog->author }}</p>
                                    </div>
                                </div>
                                <a href="{{ route('post.show', $blog->slug) }}">
                                    <h5 class="title">{{ $blog->title }}</h5>
                                </a>
                                <div class="button-area">
                                    <a href="{{ route('post.show', $blog->slug) }}"
                                        class="rts-btn btn-primary readmore-btn">Read More <i
                                            class="fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- brand area start -->
    <div class="brand-area-one">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="brand-style-one ">
                        <div class="left-title">
                            <h6 class="title">Trusted by:</h6>
                        </div>
                        <div class="swiper mySwiper-category-1 swiper-data"
                            data-swiper='{
                            "spaceBetween":30,
                            "slidesPerView":5,
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
                                "slidesPerView":5,
                                "spaceBetween":30}
                            }
                        }'>
                            <div class="swiper-wrapper">
                                <!-- single swiper style -->
                                <div class="swiper-slide">
                                    <div class="brand-area">
                                        <img src="images/1.png" alt="brand">
                                    </div>
                                </div>
                                <!-- single swiper style -->
                                <!-- single swiper style -->
                                <div class="swiper-slide">
                                    <div class="brand-area">
                                        <img src="images/2.png" alt="brand">
                                    </div>
                                </div>
                                <!-- single swiper style -->
                                <!-- single swiper style -->
                                <div class="swiper-slide">
                                    <div class="brand-area">
                                        <img src="images/3.png" alt="brand">
                                    </div>
                                </div>
                                <!-- single swiper style -->
                                <!-- single swiper style -->
                                <div class="swiper-slide">
                                    <div class="brand-area">
                                        <img src="images/4.png" alt="brand">
                                    </div>
                                </div>
                                <!-- single swiper style -->
                                <!-- single swiper style -->
                                <div class="swiper-slide">
                                    <div class="brand-area">
                                        <img src="images/5.png" alt="brand">
                                    </div>
                                </div>
                                <!-- single swiper style -->
                                <!-- single swiper style -->
                                <div class="swiper-slide">
                                    <div class="brand-area">
                                        <img src="images/6.png" alt="brand">
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

    <!-- brand area end -->
@endsection
