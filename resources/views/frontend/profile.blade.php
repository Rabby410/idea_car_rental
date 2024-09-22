@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Your Profile</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">User Details</h5>
                <p class="card-text"><strong>Name:</strong> {{ auth()->user()->name }}</p>
                <p class="card-text"><strong>Email:</strong> {{ auth()->user()->email }}</p>
                <p class="card-text"><strong>Phone:</strong> {{ auth()->user()->phone }}</p>
                <p class="card-text"><strong>Address:</strong> {{ auth()->user()->address }}</p>
                <p class="card-text"><strong>Role:</strong> {{ auth()->user()->role }}</p>

                <a href="{{ route('frontend.settings') }}" class="btn btn-primary mt-3">Edit Profile</a>
            </div>
        </div>
    </div>
@endsection
