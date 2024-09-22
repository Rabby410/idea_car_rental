@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Edit Profile</h1>

        <form action="{{ route('frontend.settings.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                <small class="form-text text-muted">You cannot change your email.</small>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ auth()->user()->phone }}" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3" required>{{ auth()->user()->address }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Update Profile</button>
        </form>
    </div>
@endsection
