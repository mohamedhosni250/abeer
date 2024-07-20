@extends('layouts.main')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-1"></div>
            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                <!-- single post -->
                <div class="blog-single-post-listing details mb--0">
                    <div class="thumbnail">
                        <img src="{{ $post->thumbnail_url }}" alt="Business-Blog">
                    </div>
                    <div class="blog-listing-content">
                        <div class="user-info">
                            <!-- single info -->
                            <div class="single">
                                <i class="far fa-user-circle"></i>
                                <span>by Abeer Education </span>
                            </div>
                            <!-- single infoe end -->
                            <!-- single info -->
                            <div class="single">
                                <i class="far fa-clock"></i>
                                <span>{{ $post->created_at->format('d M Y') }}</span>
                            </div>
                            <!-- single infoe end -->
                            <!-- single info -->
                            <div class="single">
                                <i class="far fa-tags"></i>
                                <span>Education </span>
                            </div>
                            <!-- single infoe end -->
                        </div>
                        <h3 class="title animated fadeIn">{{ $post->title }}</h3>

                        <div class="disc">
                            {!! $post->content !!}
                        </div>
                        <div class="row  align-items-center">
                            <div class="col-lg-6 col-md-12">
                                <!-- tags details -->
                                <div class="details-tag">
                                    <h6>Tags:</h6>
                                    <button>Education</button>
                                    <button>Universities</button>

                                </div>
                                <!-- tags details End -->
                            </div>

                        </div>
                    </div>
                </div>
                <!-- single post End-->
            </div>
            <div class="col-xl-1"></div>
        </div>
    </div>
@endsection
