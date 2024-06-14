@extends('layouts/main')
@section('title', 'Change Password')

@section('content')
    <div class="card">
        <div class="card-header">
            Change Password
        </div>
        <div class="card-body">
            <form action="/updatePassword" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="oldPassword" class="form-label">Old Password</label>
                    <input type="password" class="form-control" id="oldPassword" name="oldPassword" required>
                </div>
                <div class="mb-3">
                    <label for="newPassword" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="newPassword" name="newPassword" required>
                </div>
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            @if (session('info') == 'Password Successfully Changed')
                <div class="alert alert-success" role="alert">
                    {{ session('info') }}
                </div>
            @elseif (session('info') == 'Password Does Not Match' || session('info') == 'Old Password Does Not Match')
                <div class="alert alert-danger" role="alert">
                    {{ session('info') }}
                </div>
            @endif
        </div>
    </div>
@endsection

@section('Quote')
    "If you can dream it, you can do it."
@endsection

@section('Author')
    Walt Disney
@endsection
