@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Apply for {{ $program->name }}</h2>
        <form method="POST" action="{{ route('programs.submitApplication') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="program_id" value="{{ $program->id }}">

            <h3>Personal Information</h3>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="number">Phone Number</label>
                <input type="text" name="number" class="form-control" required>
            </div>

            <h3>Attachments</h3>
            <div class="form-group">
                <label for="pic">Picture</label>
                <input type="file" name="pic" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="certificate1">Certificate 1</label>
                <input type="file" name="certificate1" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="certificate2">Certificate 2</label>
                <input type="file" name="certificate2" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="certificate3">Certificate 3</label>
                <input type="file" name="certificate3" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit Application</button>
        </form>
    </div>
@endsection
