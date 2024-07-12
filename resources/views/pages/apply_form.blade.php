@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Apply for {{ $program->name }}</h2>
        <form action="{{ route('programs.submitApplication') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <input type="hidden" id="universityId" name="university_id" value="{{ $program->university_id }}">
                <input type="hidden" id="programId" name="program_id" value="{{ $program->id }}">
                <div class="form-group">
                    <label for="applicantName">Name</label>
                    <input type="text" class="form-control" id="applicantName" name="name" required>
                </div>
                <div class="form-group">
                    <label for="applicantEmail">Email</label>
                    <input type="email" class="form-control" id="applicantEmail" name="email" required>
                </div>
                <div class="form-group">
                    <label for="applicantPhoneNumber">Phone Number</label>
                    <input type="text" class="form-control" id="applicantPhoneNumber" name="phone_number" required>
                </div>
                <div class="form-group">
                    <label for="applicantAttachment">Attachment</label>
                    <input type="file" class="form-control" id="applicantAttachment" name="attachment" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit Application</button>
            </div>
        </form>
    </div>
@endsection
