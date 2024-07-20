@extends('layouts.main')


@section('content')
    <!-- about area start -->
    <div style="" class="container text-center mt-5">
        <h2 class="headline">
            <span class="support-text"> </span><br>About <span class="highlight">Abeer Education</span>
        </h2>
        <div class="line"></div>
    </div>
    <div style=" padding-bottom:50px" class="about-area-start ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-12">
                    <!-- about-one-imagearea -->
                    <div class="about-one-left-image">
                        <iframe width="490" height="600" src="https://www.youtube.com/embed/vMBPbbqpyUc"
                            title="معرض عبير الغد للدراسة في ماليزيا الاكبر من نوعه في  (القاهرة و الاسكندرية)"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
                    </div>
                    <!-- about-one-imagearea end -->
                </div>
                <div class="col-xl-6 col-lg-12 pl--60 pl_md--10 pl_sm--10 pt--50">
                    <div class="title-area-left-style">
                        <div class="pre-title">
                            <img src="images/banner/bulb.png" alt="icon">
                            <span>Gateway to Lifelong Learning</span>
                        </div>
                        <h2 class="title">Learn More About Abeer Education </h2>
                        <h5>Our mission </h2>
                            <p class="post-title">is to facilitate international educational opportunities for
                                students by providing unique pathways to study at top internationally accredited Malaysian
                                universities. We strive to create a conducive learning environment and a comprehensive
                                educational experience that enables students to achieve their academic and professional
                                growth.
                                We are committed to delivering high-quality services and personalized support to ensure the
                                success and satisfaction of our students throughout their educational journey. Our goal is
                                to
                                empower students with the knowledge, skills, and cultural exposure necessary to thrive in a
                                globalized world.

                            </p>
                            <h5>Our vision</h2>
                                <p class="post-title"> at Abeer Education in Malaysia is to be a leading provider of
                                    international education opportunities, renowned for our commitment to academic
                                    excellence,
                                    cultural diversity, and student success. We aspire to create a global learning community
                                    where
                                    students from around the world come together to pursue their educational goals. Through
                                    innovative programs and partnerships with prestigious Malaysian universities, we aim to
                                    empower
                                    students with the knowledge, skills, and global perspectives necessary to thrive in an
                                    interconnected world. We envision a future where our graduates become influential
                                    leaders
                                    and
                                    contributors to society, making a positive impact in their respective fields and
                                    communities.

                                </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- fun facts area start -->
    <div class="fun-facts-area-1 bg_image ptb--50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="fun-facts-main-wrapper-1">
                        <!-- single  -->
                        <div class="single-fun-facts">
                            <div class="icon">
                                <img src="images/fun-facts/icon/01.png" alt="icon">
                            </div>
                            <h5 class="title"><span class="counter">65,972</span></h5>
                            <span class="enr">Students Enrolled</span>
                        </div>
                        <!-- single end -->
                        <!-- single  -->
                        <div class="single-fun-facts">
                            <div class="icon">
                                <img src="images/fun-facts/icon/02.png" alt="icon">
                            </div>
                            <h5 class="title"><span class="counter">5,321</span></h5>
                            <span class="enr">Completed Course</span>
                        </div>
                        <!-- single end -->
                        <!-- single  -->
                        <div class="single-fun-facts">
                            <div class="icon">
                                <img src="images/fun-facts/icon/03.png" alt="icon">
                            </div>
                            <h5 class="title"><span class="counter">44,239</span></h5>
                            <span class="enr">Students Learner</span>
                        </div>
                        <!-- single end -->
                        <!-- single  -->
                        <div class="single-fun-facts">
                            <div class="icon">
                                <img src="images/fun-facts/icon/04.png" alt="icon">
                            </div>
                            <h5 class="title"><span class="counter">75,992</span></h5>
                            <span class="enr">Students Enrolled</span>
                        </div>
                        <!-- single end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fun facts area end -->

    <!-- rts students feedbacka area start -->
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
    <!-- rts students feedbacka area end -->
@endsection
