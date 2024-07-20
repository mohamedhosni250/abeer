@extends('layouts.main')

@section('content')
    <main class="main_wrapper overflow-hidden">
        <div>
            <div class="theme__shadow__circle"></div>
            <div class="theme__shadow__circle shadow__right"></div>
        </div>

        <div class="blogarea__2 sp_top_100 sp_bottom_100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">

                        <div class="blog__details__content__wraper">

                            <div style="margin-bottom:100px" class="container text-center mt-5">
                                <h2 class="headline">
                                    <span class="support-text"> </span><br>Our <span class="highlight">Courses</span>
                                </h2>
                                <div class="line"></div>
                            </div>
                            <div class="coursearea sp_top_100 sp_bottom_100">
                                <div class="container">
                                    <div class="row mt-4">
                                        @foreach ($courses as $course)
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                <!-- rts single course -->
                                                <div class="rts-single-course">
                                                    <a href="{{ route('course.show', $course->slug) }}" class="thumbnail">
                                                        <img src="images/course/01.jpg" alt="course">
                                                    </a>

                                                    <div style="padding: 20px ;min-height:250px">
                                                        <div class="tags-area-wrapper">
                                                            <div class="single-tag">
                                                                <span>{{ $course->courseCategory->name }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="lesson-studente">
                                                            <div class="lesson">
                                                                <i class="fa-light fa-calendar-lines-pen"></i>
                                                                <span>25 Lessons</span>
                                                            </div>
                                                            <div class="lesson">
                                                                <i class="fa-light fa-user-group"></i>
                                                                <span>54 Students</span>
                                                            </div>
                                                        </div>
                                                        <a href="single-course.html">
                                                            <h5 class="title">The Complete Web Developer in
                                                                2023: Zero to Mastery</h5>
                                                        </a>

                                                    </div>

                                                </div>
                                                <!-- rts single course end -->
                                            </div>
                                        @endforeach
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
