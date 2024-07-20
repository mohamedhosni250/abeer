@extends('layouts.main')

@section('content')
    <div class="rts-section-gap rts-blog-area">
        <div class="container pb--130">
            <div class="row g-5 mt--20">
                @foreach ($posts as $post)
                    <div class="col-lg-4">
                        <div class="single-blog-style-one">
                            <a href="{{ route('post.show', $post->slug) }}" class="thumbnail">
                                <img src="{{ asset($post->thumbnail_url) }}" alt="{{ $post->title }}">
                            </a>
                            <div class="blog-top-area">

                                <div class="tags-area">

                                </div>
                                <div class="single">
                                    <i class="fa-light fa-calendar-days"></i>
                                    <p>{{ $post->created_at->format('F d, Y') }}</p>
                                </div>
                            </div>

                            <a href="{{ route('post.show', $post->slug) }}">
                                <h5 class="title">{{ $post->title }}</h5>
                            </a>

                            <a href="{{ route('post.show', $post->slug) }}" class="rts-btn btn-primary">
                                Read More
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts-elevate-pagination">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
