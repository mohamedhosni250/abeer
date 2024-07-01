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
                    <div class="col-xl-12 col-lg-12">
                        <div class="blogarae__img__2 course__details__img__2" data-aos="fade-up">
                            <img loading="lazy" src="{{ asset($university->featured_image_url) }}" alt="blog">
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
    </main>

@endsection
