<div class="coursearea sp_top_100 sp_bottom_100">
    <div class="container">

        <div class="row mt-4">
            @foreach ($universities as $university)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="container mt-5">

                        <div class="card mx-auto" style="">
                            <img src="http://abeer.test/storage/uploads/featured_images/01J1THW2E5WDERK46K13VME0GE.png "
                                class="card-img-top" alt="University Image">
                            <div class="logo-container">
                                <img src="{{ asset($university->logo_url) }}" alt="University Logo" class="img-fluid">
                            </div>

                            <div class="card-body text-center">
                                <h3><a
                                        href="{{ route('university.show', $university->slug) }}">{{ $university->name }}</a>
                                </h3>
                                <p class="card-text location-text text-muted"><i class="bi bi-geo-alt"></i>
                                    {{ $university->location->name }} </p>
                                <li><i class="icofont-book-alt"></i> {{ $university->programs_count }} Programs</li>
                            </div>

                        </div>

                    </div>
                </div>
            @endforeach
        </div>

        @if ($universities->hasMorePages())
            <div class="load-more-container text-center mt-4">
                <button wire:click="loadMore" class="btn btn-primary">Load More</button>
            </div>
        @endif
    </div>
</div>
