@extends('layouts.main')


@section('title', 'Search Results')

@section('content')
    <div class="container py-5">
        <div class="container text-center mt-5">
            <h2 class="headline">
                <span class="support-text"> </span><br> Best Universities For <span class="highlight">You</span>
            </h2>
            <div class="line"></div>
        </div>
        @forelse ($programs as $university => $universityPrograms)
            <div style="margin-top: 50px" class="mb-5">
                <div class=" d-flex align-items-center mb-3"
                    style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 15px; border-radius: 8px;">
                    <div style="position: unset; margin:10px; width:120px;" class="avatar-wrapper">
                        <img src="http://abeer.test/storage/universities_logos/01J2VNXV103X8P882PFGWPRFT3.png"
                            alt="Asia Pacific University (APU) tt" class="mr-3" style="">
                    </div>
                    <h3 class="animated fadeIn">Asia Pacific University (APU) tt</h3>
                </div>
                <div style="margin-top: 50px" class="row">
                    @foreach ($universityPrograms as $program)
                        <div class="col-md-6 mb-4">
                            <div class="program-card">
                                <h3 class="program-title">{{ $program->name }}</h3>
                                <div class="info-container">
                                    <div>
                                        <span class="program-price">{{ $program->fee_per_year }}$</span>
                                        <small>Per Year</small>
                                    </div>
                                    <div>
                                        <span>+{{ $program->duration }} Year</span>
                                        <small>Duration</small>
                                    </div>
                                    <div>
                                        <span>{{ $program->study_mode }}</span>
                                        <small>Study Mode</small>
                                    </div>
                                    <div>
                                        <span>{{ $program->intake }}</span>
                                        <small>Intake</small>
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
            </div>
        @empty
            <p>No programs found for the selected criteria.</p>
        @endforelse
    </div>

@endsection
