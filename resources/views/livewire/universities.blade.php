<div class="coursearea sp_top_100 sp_bottom_100">
    <div class="container">
        <div class="row mt-4">
            @foreach ($universities as $university)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="rts-single-course">
                        <a href="{{ route('university.show', $university->slug) }}" class="thumbnail">
                            <img src="{{ $university->featured_image_url }}" alt="course">
                        </a>
                        <div class="avatar-wrapper">
                            <img src="{{ $university->logo_url }}" alt="teacher avatar" class="teacher-avatar">
                        </div>
                        <div class="University-bottom">
                            <a href="{{ route('university.show', $university->slug) }}">
                                <h5 class="card-title title">{{ $university->name }}</h5>
                            </a>
                            <div class="lesson-studente">
                                <div class="lesson">
                                    <i class="fa-light fa-calendar-lines-pen"></i>
                                    <span>{{ $university->programs_count }} Programs</span>
                                </div>
                                <div class="lesson">
                                    <i class="fa-light fa-user-group"></i>
                                    <span>{{ $university->students_count }} Students</span>
                                </div>
                            </div>
                            <p style="font-size: 18px;">
                                Start From <span
                                    style="color: #00B6ED; font-weight: bold;">${{ $university->starting_fee }}</span>
                                per year
                            </p>
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

        @if ($universities->hasMorePages())
            <div style="width: 200px ; margin:20px" class="load-more-container text-center mt-4">
                <button wire:click="loadMore" class="rts-btn btn-primary">Load More</button>
            </div>
        @endif
    </div>
</div>
