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

                <div style="margin-top: 50px" class="card">

                    <div class="card-header">
                        <h2 style="padding: 20px" style="line-height: 58px;" class="headline">
                            <span class="support-text"> </span><br> Sign Up With <span class="highlight"> Abeed Education
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
                                        name="name" required>
                                </div>
                                <div class="form-group">
                                    <input placeholder="Email" type="email" class="form-control" id="applicantEmail"
                                        name="email" required>
                                </div>
                                <div class="form-group">
                                    <input placeholder="Phone Number" type="text" class="form-control"
                                        id="applicantPhoneNumber" name="phone_number" required>
                                </div>
                                <div class="form-group">
                                    <label for="applicantAttachment">Attachment</label>
                                    <input type="file" class="form-control" id="applicantAttachment" name="attachment"
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
