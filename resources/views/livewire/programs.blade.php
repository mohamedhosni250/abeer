<div>
    <div class="row">
        @foreach ($programs as $program)
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="gridarea__wraper gridarea__wraper__2">
                    <div class="gridarea__img">
                        <a href=""><img loading="lazy" src="{{ $program->image_url }}" alt="program"></a>
                        <div class="gridarea__small__button">
                            <div class="grid__badge">{{ $program->department->name }}</div>
                            <div class="grid__badge">{{ $program->degree->name }}</div>
                        </div>
                        <div class="gridarea__small__icon">
                            <a href="#"><i class="icofont-heart-alt"></i></a>
                        </div>
                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__list">
                            <ul>
                                <li><i class="icofont-book-alt"></i> {{ $program->lessons }} Lesson(s)</li>
                                <li><i class="icofont-clock-time"></i> {{ $program->duration }}</li>
                            </ul>
                        </div>
                        <div class="gridarea__heading">
                            <h3><a href="">{{ $program->name }}</a></h3>
                        </div>
                        <div class="gridarea__price">
                            ${{ $program->fee_per_year }}
                            <span><del class="del__2">{{ $program->discount_percentage }}% Off</del></span>
                        </div>
                        <div class="gridarea__bottom">
                            <div class="gridarea__star">
                                @for ($i = 0; $i < 5; $i++)
                                    <i class="icofont-star {{ $i < $program->rating ? 'active' : '' }}"></i>
                                @endfor
                                <span>({{ $program->reviews_count }})</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if ($programs->hasMorePages())
        <div class="text-center mt-4">
            <button class="btn btn-primary" wire:click="loadMore">Load More</button>
        </div>
    @endif
</div>
