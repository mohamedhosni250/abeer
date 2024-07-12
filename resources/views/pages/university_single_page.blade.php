@extends('layouts.app')
@section('content')
    <div class="single-university-page">
        <div class="coursearea">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8">
                        <img src="{{ asset($university->featured_image_url) }}" class="img-fluid rounded"
                            alt="University Image">
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="info-card">
                            <img width="100px" src="{{ asset($university->logo_url) }}" alt="">
                            <div class="icon-container">
                                <div>
                                    <i class="fas fa-star"></i>
                                    <h5 class="fw-bold">Top</h5>
                                    <p class="text-muted">Ranking</p>
                                </div>
                                <div>
                                    <i class="fas fa-user-graduate"></i>
                                    <h5 class="fw-bold">+10k</h5>
                                    <p class="text-muted">Students</p>
                                </div>
                                <div>
                                    <i class="fas fa-book"></i>
                                    <h5 class="fw-bold">87</h5>
                                    <p class="text-muted">Programs</p>
                                </div>
                            </div>
                            <div class="divider">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <ul>
                                <li class="mb-2"><i class="fas fa-dot-circle"></i> Globally top 2.2%, 5 Stars Plus in QS
                                    2024.</li>
                                <li class="mb-2"><i class="fas fa-dot-circle"></i> Thriving international community:
                                    13,000+
                                    students from 130+ countries.</li>
                                <li class="mb-2"><i class="fas fa-dot-circle"></i> 100% employability rate upon graduation
                                    (Ministry-certified).</li>
                            </ul>
                            <h6 class="fw-bold">Starting From <span style="color: #007bff;">$7100</span></h6>
                            <a href="#">APPLY NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            {{-- univeristy details  --}}
            <div class="course-content-wrapper-main">
                <h5 class="title">Course Content</h5>

                <!-- course content accordion area -->
                <div class="accordion mt--30" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span>Introduction</span>
                                <span>3 Lectures . 9 min</span>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Introduction to the course</span>
                                    </div>
                                    <div class="right">
                                        <span class="play">Preview</span>
                                        <span>9 min</span>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Introduction to the course</span>
                                    </div>
                                    <div class="right">
                                        <span class="play">Preview</span>
                                        <span>9 min</span>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Introduction to the course</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span>Learn to Storyboard</span>
                                <span>7 Lectures . 120 min</span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Become a storyboard artist</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>storyboard artist</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Introduction PHP</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>LEarning Fundamentsl Elementor</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Enter to the course</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Main Part of the course</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Function About PHP</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span>How to draw characters, layouts, and scenes</span>
                                <span>7 Lectures . 83 min</span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Become a storyboard artist</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>storyboard artist</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Introduction PHP</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>LEarning Fundamentsl Elementor</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Enter to the course</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Main Part of the course</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Function About PHP</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span>1-point and 2-point perspective</span>
                                <span>7 Lectures . 72 min</span>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Become a storyboard artist</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>storyboard artist</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Introduction PHP</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>LEarning Fundamentsl Elementor</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Enter to the course</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Main Part of the course</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Function About PHP</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <span>Digital drawing application</span>
                                <span>7 Lectures . 90 min</span>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Become a storyboard artist</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>storyboard artist</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Introduction PHP</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>LEarning Fundamentsl Elementor</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Enter to the course</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Main Part of the course</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                                <!-- play single area start -->
                                <a href="#" class="play-vedio-wrapper">
                                    <div class="left">
                                        <i class="fa-light fa-circle-play"></i>
                                        <span>Function About PHP</span>
                                    </div>
                                    <div class="right">
                                        <i class="fa-regular fa-lock"></i>
                                    </div>
                                </a>
                                <!-- play single area end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- course content accordion area end -->
            </div>

            {{-- tabs --}}
            <div class="course-details-btn-wrapper full-width pb--50">
                <div class="course__text">
                    <p>Showing {{ $university->programs->count() }} Results</p>
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">


                    @foreach ($degrees as $degreeId => $programs)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link @if ($loop->first) active @endif" id="home-tab"
                                data-bs-toggle="tab" data-bs-target="#degree_{{ $degreeId }}" type="button"
                                role="tab" aria-controls="home" aria-selected="true">
                                {{ $programs->first()->degree->name }}
                            </button>

                        </li>
                    @endforeach

                </ul>
            </div>
            <div class="tab-content mt--50" id="myTabContent">
                <div class="tab-pane fade  show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="tab-content tab__content__wrapper" id="myTabContent">
                        @foreach ($degrees as $degreeId => $programs)
                            <div class="tab-pane fade @if ($loop->first) show active @endif"
                                id="degree_{{ $degreeId }}" role="tabpanel">
                                <livewire:programs :degreeName="$degreeId" :universityId="$university->id" />
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="course-content-wrapper-main">
                        <h5 class="title">Course Content</h5>
                    </div>

                </div>
            </div>

        </div>
    @endsection
