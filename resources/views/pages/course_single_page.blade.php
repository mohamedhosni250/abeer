@extends('layouts.main')

@section('content')
    <div class="rts-lession-details-area-start">
        <div class="rts-lession-content-wrapper">
            <div class="rts-lession-left">

                <!-- course content accordion area -->
                <div class="course-content-wrapper-main">
                    <div class="accordion mt--30" id="accordionExample">
                        @foreach ($course->videos as $index => $video)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $index }}">
                                    <button class="accordion-button @if ($index != 0) collapsed @endif"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $index }}"
                                        aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                        aria-controls="collapse{{ $index }}">
                                        <span>{{ $video->title }}</span>
                                    </button>
                                </h2>
                                <div id="collapse{{ $index }}"
                                    class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                    aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <a href="{{ route('course.show', ['slug' => $course->slug, 'video_id' => $video->id]) }}"
                                            class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>{{ $video->title }}</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="rts-lession-right">
                <div class="lesson-top-bar">
                    <div class="left-area">
                        <div class="toggle-class" id="toggle-left-back">
                            <i class="fa-light fa-chevron-left"></i>
                        </div>
                        <span>Course Content</span>
                    </div>
                    <div class="right">
                        <a href="course-two.html"><i class="fa-solid fa-x"></i></a>
                    </div>
                </div>

                <iframe id="mainVideo" width="100%" height="315" src="{{ $course->videos->first()->link }}"
                    title="{{ $course->videos->first()->title }}" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <div class="lesson-bottom-area">
                    <h5 class="title mb--10">About Lesson</h5>
                    <p class="disc">
                        {{ $course->description }}
                    </p>
                </div>
                <div class="next-prev-area">
                    <div class="prev">
                        <i class="fa-sharp fa-solid fa-play"></i>
                        Prev
                    </div>
                    <div class="next">
                        Prev
                        <i class="fa-sharp fa-solid fa-play"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
