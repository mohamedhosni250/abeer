@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div style="margin-top: 50px" class="card">
                    <div class="card-header">
                        <h2 style="padding: 20px" class="headline">
                            <span class="support-text"> </span><br> Sign Up With <span class="highlight"> Abeer Education
                            </span>
                        </h2>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('leads.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="applyform">
                                <div class="form-group">
                                    <label for="applicantName"> </label>
                                    <input placeholder="Full name" type="text" class="form-control" id="applicantName"
                                        name="name" value="{{ old('name') }}" required>
                                </div>
                                <div class="form-group">
                                    <input placeholder="Email" type="email" class="form-control" id="applicantEmail"
                                        name="email" value="{{ old('email') }}" required>
                                </div>
                                <div class="form-group">
                                    <input placeholder="Phone Number" type="text" class="form-control"
                                        id="applicantPhoneNumber" name="phone_number" value="{{ old('phone_number') }}"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="applicantAttachment">Attachment</label>
                                    <input type="file" class="form-control" id="applicantAttachment" name="attachment"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="applicantPassport">Passport</label>
                                    <input type="file" class="form-control" id="applicantPassport" name="passport"
                                        required>
                                </div>
                                <button type="submit" class="rts-btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
