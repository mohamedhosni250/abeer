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

                            <div class="course__details__heading" data-aos="fade-up">
                                <h3>Courses</h3>
                            </div>
                            <div class="coursearea sp_top_100 sp_bottom_100">
                                <div class="container">
                                    <div class="row mt-4">
                                        @foreach ($courses as $course)
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4">
                                                <div class="rts-single-course">
                                                    {{-- <a href="{{ route('course.show', $course->slug) }}" class="thumbnail"> --}}
                                                    <a href="#" class="thumbnail">
                                                        <img src="{{ $course->featured_image_url }}" alt="course"
                                                            onerror="this.onerror=null;this.src='images/placeholder.png';">
                                                    </a>
                                                    <div class="avatar-wrapper">
                                                        @if ($course->logo_url)
                                                            <img src="{{ $course->logo_url }}" class="teacher-avatar">
                                                        @endif
                                                    </div>
                                                    <div class="University-bottom">
                                                        <h5 class="card-title title">{{ $course->title }}</h5>

                                                        <div class="lesson-studente">
                                                            <div class="lesson">
                                                                <i class="fa-light fa-calendar-lines-pen"></i>
                                                                <span>{{ $course->student_number }} Programs</span>
                                                            </div>
                                                            <div class="lesson">
                                                                <i class="fa-light fa-user-group"></i>
                                                                <span>{{ $course->hours }} Students</span>
                                                            </div>
                                                        </div>
                                                        {{-- <p style="font-size: 18px;">
                                                            Start From <span
                                                                style="color: #00B6ED; font-weight: bold;">${{ $university->starting_fee }}</span>
                                                            per year
                                                        </p> --}}
                                                        <div style="justify-content: flex-end;" class="tags-area-wrapper">
                                                            <div class="single-price">
                                                                <span>Read More </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
