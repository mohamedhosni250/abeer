@extends('layouts.main')


@section('content')
    <div class="container">

        <form style="    margin: 0px auto;
    width: 50%;" action="{{ route('programs.submitApplication') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="applyform">
                <h2 style="line-height: 58px;" class="headline">
                    <span class="support-text"> </span><br> Apply for <span class="highlight">{{ $program->name }} At <br>
                    </span>
                    {{ $program->university->name }} University
                </h2>

                <input type="hidden" id="universityId" name="university_id" value="{{ $program->university_id }}">
                <input type="hidden" id="programId" name="program_id" value="{{ $program->id }}">
                <div class="form-group">
                    <label for="applicantName"> </label>
                    <input placeholder="Full name" type="text" class="form-control" id="applicantName" name="name"
                        required>
                </div>
                <div class="form-group">
                    <input placeholder="Email" type="email" class="form-control" id="applicantEmail" name="email"
                        required>
                </div>
                <div class="form-group">
                    <input placeholder="Phone Number" type="text" class="form-control" id="applicantPhoneNumber"
                        name="phone_number" required>
                </div>
                <div class="form-group">
                    <label for="applicantAttachment">Attachment</label>
                    <input type="file" class="form-control" id="applicantAttachment" name="attachment" required>
                </div>
                <button type="submit" class="rts-btn btn-primary">Submit Application</button>

            </div>


        </form>

    </div>
@endsection
