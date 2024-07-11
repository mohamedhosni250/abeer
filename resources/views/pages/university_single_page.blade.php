<!-- resources/views/universities/show.blade.php -->
@extends('layouts.app')

@section('title', $university->name)

@section('content')
    <main class="main_wrapper overflow-hidden">
        <div>
            <div class="theme__shadow__circle"></div>
            <div class="theme__shadow__circle shadow__right"></div>
        </div>

        <div class="blogarea__2 sp_top_100 sp_bottom_100">
            <div class="container">
                <div class="row">

                    <div class="col-xl-8 col-lg-8">
                        <div class="container mt-5">
                            <div class="card mx-auto" style="">
                                <img src="{{ asset($university->featured_image_url) }} "class="card-img-top"
                                    alt="University Image">
                                <div class="logo-container">
                                    <img src="{{ asset($university->logo_url) }}" alt="University Logo" class="img-fluid">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title fw-bold">ASIA PACIFIC UNIVERSITY (APU)</h5>
                                    <p class="card-text location-text text-muted"><i class="bi bi-geo-alt"></i> Kuala
                                        Lumpur, Malaysia</p>
                                </div>
                            </div>
                        </div>

                        <div class="blog__details__content__wraper">
                            <div class="course__button__wraper" data-aos="fade-up">
                                <div class="course__button">
                                    <a href="#">Featured</a>
                                    <a class="course__2" href="#">Ux Design</a>
                                </div>
                                <div class="course__date">
                                    <p>Last Update:<span> Sep 29, 2024</span></p>
                                </div>
                            </div>
                            <div class="course__details__heading" data-aos="fade-up">
                                <h3>{{ $university->name }}</h3>
                            </div>
                            <div class="course__details__price" data-aos="fade-up">
                                <ul>
                                    <li>
                                        <div class="course__price">
                                            {{ $university->location->name }}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="course__details__date">
                                            <i class="icofont-book-alt"></i> 23 Lesson
                                        </div>
                                    </li>
                                    <li>
                                        <div class="course__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(44)</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="course__details__paragraph" data-aos="fade-up">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate
                                    vestibulum rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae
                                    ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt
                                    sapien. Nulla quis diam sit amet turpis interd enim. Vivamus faucibus ex sed nibh
                                    egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus. Suspendisse
                                    consectetur tristique.
                                </p>
                            </div>
                            <div class="accordion content__cirriculum__wrap" id="accordionExample">
                                @foreach ($university->details as $index => $detail)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading{{ $index }}">
                                            <button
                                                class="accordion-button @if ($index > 0) collapsed @endif"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $index }}"
                                                aria-expanded="@if ($index === 0) true @else false @endif"
                                                aria-controls="collapse{{ $index }}">
                                                {{ $detail->tab_name }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $index }}"
                                            class="accordion-collapse collapse @if ($index === 0) show @endif"
                                            aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                {!! $detail->content !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            {{-- hosni new section --}}
                            <div class="coursearea sp_top_100 sp_bottom_100">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="course__text__wraper">
                                                <div class="course__text">
                                                    <p>Showing {{ $university->programs->count() }} Results</p>
                                                </div>
                                                <div class="course__icon">
                                                    <ul class="nav property__team__tap" id="myTab" role="tablist">
                                                        @foreach ($degrees as $degreeId => $programs)
                                                            <li class="nav-item" role="presentation">
                                                                <a href="#degree_{{ $degreeId }}"
                                                                    class="single__tab__link @if ($loop->first) active @endif"
                                                                    data-bs-toggle="tab" role="tab">
                                                                    {{ $programs->first()->degree->name }}
                                                                    <!-- Adjust this line based on your data structure -->
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-content tab__content__wrapper" id="myTabContent">
                                        @foreach ($degrees as $degreeId => $programs)
                                            <div class="tab-pane fade @if ($loop->first) show active @endif"
                                                id="degree_{{ $degreeId }}" role="tabpanel">
                                                <livewire:programs :degreeName="$degreeId" :universityId="$university->id" />
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                            <!-- Include Livewire component here -->
                        </div>

                    </div>
                    {{-- custom hosni  --}}
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">



                        <div class="container mt-5">
                            <div class="info-card">
                                <div class="icon-container">
                                    <div>
                                        <i class="bi bi-star-fill" style="font-size: 2rem; color: #007bff;"></i>
                                        <h5 class="fw-bold">Top</h5>
                                        <p class="text-muted">Ranking</p>
                                    </div>
                                    <div>
                                        <i class="bi bi-mortarboard-fill" style="font-size: 2rem; color: #007bff;"></i>
                                        <h5 class="fw-bold">+10k</h5>
                                        <p class="text-muted">Students</p>
                                    </div>
                                    <div>
                                        <i class="bi bi-book-fill" style="font-size: 2rem; color: #007bff;"></i>
                                        <h5 class="fw-bold">87</h5>
                                        <p class="text-muted">Programs</p>
                                    </div>
                                </div>
                                <div class="divider">
                                    <i class="bi bi-info-circle-fill" style="font-size: 1.2rem; color: #007bff;"></i>
                                </div>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-dot"></i> Globally top 2.2%, 5 Stars Plus in QS
                                        2024.</li>
                                    <li class="mb-2"><i class="bi bi-dot"></i> Thriving international community: 13,000+
                                        students from 130+ countries.</li>
                                    <li class="mb-2"><i class="bi bi-dot"></i> 100% employability rate upon graduation
                                        (Ministry-certified).</li>
                                </ul>
                                <h6 class="fw-bold">Starting From <span style="color: #007bff;">7100$</span></h6>
                                <a href="#" class="btn btn-primary w-100 mt-3">APPLY NOW</a>
                            </div>
                        </div>


                    </div>
                </div>
    </main>

@endsection
