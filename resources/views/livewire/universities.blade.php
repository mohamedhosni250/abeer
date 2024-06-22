<div class="coursearea sp_top_100 sp_bottom_100">
    <div class="container">

        <div class="row mt-4">
            @foreach ($universities as $university)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="gridarea__wraper gridarea__wraper__2">
                        <div class="gridarea__img">
                            <a href=""><img loading="lazy" src="{{ $university->featured_image }}"
                                    alt="university"></a>
                            <div class="gridarea__small__button">
                                <div class="grid__badge">{{ $university->name }}</div>
                            </div>
                            <div class="gridarea__small__icon">
                                <a href="#"><i class="icofont-heart-alt"></i></a>
                            </div>
                        </div>
                        <div class="gridarea__content">
                            <div class="gridarea__list">
                                <ul>
                                    <li><i class="icofont-book-alt"></i> {{ $university->programs_count }} Programs</li>
                                </ul>
                            </div>
                            <div class="gridarea__heading">
                                <h3><a href="">{{ $university->name }}</a></h3>
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
