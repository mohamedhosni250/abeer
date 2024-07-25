<div>
    <div class="row">
        @foreach ($programs as $program)
            <div style="margin-top: 40px" class="col-md-6 mb-4">
                <div class="program-card">
                    <h3 class="program-title">{{ $program->name }}</h3>
                    <div class="info-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-6 col-md-3 text-center">
                                    <span class="program-price">{{ $program->fee_per_year }}$</span>
                                    <small>Per Year</small>
                                </div>
                                <div class="col-6 col-md-3 text-center">
                                    <span>+{{ $program->duration }} Year</span>
                                    <small>Duration</small>
                                </div>
                                <div class="col-6 col-md-3 text-center">
                                    <span>{{ $program->study_mode }}</span>
                                    <small>Study Mode</small>
                                </div>
                                <div class="col-6 col-md-3 text-center">
                                    <span>{{ $program->intake }}</span>
                                    <small>Intake</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scholarship-container">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span>Partial Scholarship</span>
                            <span>Up to <strong>{{ $program->scholarship_percentage }}%</strong> = Per Year
                                <strong style="color: #00B6ED;">{{ $program->fee_per_year }}$</strong></span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"
                                style="width: {{ $program->scholarship_percentage }}%;"
                                aria-valuenow="{{ $program->scholarship_percentage }}" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="buttons-container">
                        <a href="{{ route('programs.apply', ['id' => $program->id]) }}" class="btn apply-btn">
                            Apply Now
                        </a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if ($programs->hasMorePages())
        <div class="text-center mt-4">
            <button class="rts-btn btn-primary" wire:click="loadMore">Load More</button>
        </div>
    @endif
</div>
