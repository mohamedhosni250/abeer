@extends('layouts.app')

@section('title', 'Search Results')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4">Best Universities For <span style="color: #007bff;">You</span></h2>

        @forelse ($programs as $university => $universityPrograms)
            <div class="mb-5">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ $universityPrograms->first()->university->logo }}" alt="{{ $university }}" class="mr-3"
                        style="width: 100px; height: auto;">
                    <h3>{{ $university }}</h3>
                </div>
                <div class="row">
                    @foreach ($universityPrograms as $program)
                        <div class="col-md-6 mb-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $program->name }}</h5>
                                    <p class="card-text"><strong>{{ number_format($program->fee_per_year, 2) }}$</strong>
                                        Per Year</p>
                                    <p class="card-text"><strong>{{ $program->duration }} YEARS</strong> Duration</p>
                                    <p class="card-text"><strong>{{ $program->intake }}</strong> Intake</p>
                                    <p class="card-text"><strong>{{ $program->degree->name }}</strong> </p>
                                    <p class="card-text"><strong>{{ $program->department->name }}</strong> </p>
                                    <p class="card-text">
                                        <strong>
                                            <a href="{{ route('university.show', $program->university->id) }}">
                                                {{ $program->university->name }}
                                            </a>
                                        </strong>

                                    </p>
                                    @if ($program->scholarship_percentage)
                                        <p class="card-text">Partial Scholarship: Up to
                                            <strong>{{ number_format($program->scholarship_percentage, 2) }}%</strong>
                                        </p>
                                    @endif
                                    <div class="d-flex">
                                        <a href="{{ route('programs.apply', $program->id) }}"
                                            class="btn btn-primary mr-2">Apply Now</a>

                                        <a href="#" class="btn btn-outline-primary">Ask Us</a>
                                    </div>
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
