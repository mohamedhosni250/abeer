@extends('layouts.app')

@section('title', 'Search Results')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4">Best Universities For <span style="color: #007bff;">You</span></h2>
        @forelse ($programs as $university => $universityPrograms)
            <div class="mb-5">
                <div class=" d-flex align-items-center mb-3">
                    <div style="position: unset ; margin:10px ; width:120px " class="avatar-wrapper"><img
                            src="{{ $universityPrograms->first()->university->logo_url }}" alt="{{ $university }}"
                            class="mr-3" style=""></div>

                    <h3>{{ $university }}</h3>
                </div>
                <div class="row">
                    @foreach ($universityPrograms as $program)
                        <div class="col-md-6 mb-4">
                            <div class="program-card">
                                <h3 class="program-title">{{ $program->name }}</h3>
                                <div class="info-container">
                                    <div>
                                        <span>{{ $program->fee_per_year }}$</span>
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
                                    <a href="" class="btn ask-btn">Ask
                                        Us</a>
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
