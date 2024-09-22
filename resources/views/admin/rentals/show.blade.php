@extends('layouts.app')

@section('title', 'Rental Details')

@section('content')
    <div class="container mt-5">
        <h1 class="h3 mb-4">Rental Details</h1>

        <div class="card shadow-lg">
            <div class="row g-0">
                <div class="col-md-6 d-flex flex-column justify-content-center p-4">
                    <p class="h5"><strong>Customer Name:</strong> {{ $rental->user ? $rental->user->name : 'N/A' }}</p>
                    <p class="h5"><strong>Car:</strong> {{ $rental->car ? $rental->car->name : 'N/A' }}</p>
                    <p class="h5"><strong>Start Date:</strong> {{ \Carbon\Carbon::parse($rental->start_date)->format('d M Y') }}</p>
                    <p class="h5"><strong>End Date:</strong> {{ \Carbon\Carbon::parse($rental->end_date)->format('d M Y') }}</p>
                    <p class="h5"><strong>Total Price:</strong> TK {{ number_format($rental->total_cost, 2) }}</p>
                </div>
                <div class="col-md-6">
                    @if($rental->car && $rental->car->image)
                        <img src="{{ Storage::url('cars/' . $rental->car->image) }}" alt="{{ $rental->car->name }}" class="img-fluid rounded-start" style="height: 100%; object-fit: cover;">
                    @else
                        <div class="h-100 d-flex align-items-center justify-content-center bg-light">
                            <span class="text-muted">No Image Available</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="mt-4">
            <form action="{{ route('admin.rentals.destroy', $rental->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this rental?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Cancel Rental</button>
            </form>
            <a href="{{ route('admin.rentals.index') }}" class="btn btn-primary mt-2">
                Back to Rentals
            </a>
        </div>
    </div>
@endsection
