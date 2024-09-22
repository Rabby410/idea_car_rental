@extends('layouts.app')

@section('title', 'Rent Car')

@section('content')
    <div class="container mt-5">
        <div class="bg-light shadow-lg rounded-lg p-4 p-md-5">
            <h2 class="text-center text-3xl font-bold mb-4">Rent {{ $car->name }}</h2>

            <form action="{{ route('frontend.rentals.store', $car->id) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="start_date" class="form-label">Start Date:</label>
                    <input type="date" name="start_date" id="start_date" class="form-control" required>
                </div>

                <div class="mb-4">
                    <label for="end_date" class="form-label">End Date:</label>
                    <input type="date" name="end_date" id="end_date" class="form-control" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg w-100">
                        Book Car
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
