@extends('layouts.main')

@section('content')
    <div class="single-university-page">
        <div class="coursearea">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8">
                        <div class="university-card">
                            <div class="thumbnail">
                                <img src="{{ asset($university->featured_image_url) }}" alt="University Image"
                                    class="img-fluid">
                            </div>
                            <div class="university-content text-center">
                                <div class="university-logo mb-3">
                                    <img src="{{ asset($university->logo_url) }}" alt="University Logo" class="logo-img">
                                </div>
                                <h3 style="padding-top: 3%" class="university-title">{{ $university->name }}</h3>
                                <p class="university-location">
                                    <i class="fa fa-map-marker-alt"></i> {{ $university->location->name }}
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 mb-4">
                        <div style="padding: 8%" class="university-stats-card">
                            <div class="stats">
                                <div class="stat-item">
                                    <i class="fa fa-star"></i>
                                    <span>Top</span>
                                    <p>Ranking</p>
                                </div>
                                <div class="stat-item">
                                    <i class="fa fa-graduation-cap"></i>
                                    <span>+{{ $university->students_count }}</span>
                                    <p>Students</p>
                                </div>
                                <div class="stat-item">
                                    <i class="fa fa-book"></i>
                                    <span>{{ $university->programs_count }}</span>
                                    <p>Programs</p>
                                </div>
                            </div>
                            <div class="separator">
                                <hr />
                                <i class="fa fa-info-circle"></i>
                                <hr />
                            </div>
                            <p>{!! $university->description !!}</p>
                            <p style="font-weight:bold" class="starting-fee">Starting From
                                <span>{{ $university->starting_fee }}$</span>
                            </p>
                            <a style="margin: 51px auto;" href="#myTab" class="rts-btn btn-primary">Apply Now </a>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            {{-- univeristy details  --}}
            <div style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px; "
                class="container p-4 ">
                <div class="container text-center mt-5 mb-10 hosni-headline">
                    <h2 class="headline">
                        <span class="support-text"> </span><br> Details About <span
                            class="highlight">{{ $university->name }}</span>
                    </h2>
                    <div style="margin-bottom:50px" class="line"></div>
                </div>
                <div class="accordion accordion-flush" id="accordionFlushExample">

                    @foreach ($university->details as $index => $detail)
                        <div class="accordion-item rounded-3 border-0 shadow mb-2">
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button border-bottom {{ $index === 0 ? '' : 'collapsed' }} fw-semibold"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse{{ $index }}"
                                    aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                    aria-controls="flush-collapse{{ $index }}">
                                    {{ $detail->tab_name }}
                                </button>
                            </h2>
                            <div id="flush-collapse{{ $index }}"
                                class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    {!! $detail->content !!}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            {{-- tabs --}}
            <div id="" class="course-details-btn-wrapper full-width pb--50">
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
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
