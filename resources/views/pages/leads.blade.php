@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="container text-center mt-5">
            <h2 class="headline">
                <span class="support-text"> </span><br>Register with
                <span class="highlight">Abeer Education</span>
            </h2>
            <div class="line"></div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card" style="margin-top: 50px">
                        <div class="card-header">
                            <h2 class="headline">
                                <span class="support-text"> </span><br>Register
                            </h2>
                        </div>

                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @elseif (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <form action="{{ route('leads.store') }}" method="POST" enctype="multipart/form-data"
                                style="margin: 0px auto;">
                                @csrf
                                <div class="applyform">
                                    <div class="form-group">
                                        <label for="applicantName"> </label>
                                        <input placeholder="Full name" type="text" class="form-control"
                                            id="applicantName" name="name" value="{{ old('name') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <input placeholder="Email" type="email" class="form-control" id="applicantEmail"
                                            name="email" value="{{ old('email') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <input placeholder="Phone Number" type="tel" class="form-control"
                                            id="applicantPhoneNumber" name="phone_number" value="{{ old('phone_number') }}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="applicantAttachment">Last Certificate</label>
                                        <input type="file" class="form-control" id="applicantAttachment"
                                            name="attachment">
                                    </div>
                                    <div class="form-group">
                                        <label for="applicantPassport">Passport</label>
                                        <input type="file" class="form-control" id="applicantPassport" name="passport">
                                    </div>
                                    <button type="submit" class="rts-btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />

    <!-- Include JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var input = document.querySelector("#applicantPhoneNumber");
            var iti = window.intlTelInput(input, {
                initialCountry: "auto",
                geoIpLookup: function(callback) {
                    fetch('https://ipinfo.io/json', {
                            headers: {
                                'Accept': 'application/json'
                            }
                        })
                        .then((resp) => resp.json())
                        .then((resp) => {
                            callback(resp.country);
                        })
                        .catch(() => {
                            callback("us");
                        });
                },
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
            });

            function updatePhoneNumber() {
                var fullNumber = iti.getNumber();
                input.value = fullNumber;
            }

            input.addEventListener("countrychange", updatePhoneNumber);
            input.addEventListener("blur", updatePhoneNumber);

            updatePhoneNumber();
        });
    </script>
@endsection
