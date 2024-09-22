@extends('layouts.app')

@section('title', 'Available Cars')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center mb-4">Available Cars</h1>

        <!-- Search Form -->
        <form method="GET" action="{{ route('frontend.cars.index') }}" class="mb-4">
            <div class="row">
                <div class="col-md-3">
                    <input type="text" name="brand" class="form-control" placeholder="Brand" value="{{ request('brand') }}">
                </div>
                <div class="col-md-3">
                    <input type="text" name="car_type" class="form-control" placeholder="Car Type" value="{{ request('car_type') }}">
                </div>
                <div class="col-md-3">
                    <input type="number" name="daily_rent_price" class="form-control" placeholder="Max Rent Price" value="{{ request('daily_rent_price') }}">
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary btn-block">Search</button>
                </div>
            </div>
        </form>

        <!-- Car Cards Grid -->
        <div class="row">
            @foreach($cars as $car)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-lg border-0">
                        <div class="position-relative">
                            <img src="{{ Storage::url('cars/' . $car->image) }}" alt="{{ $car->name }}" class="card-img-top img-fluid" style="object-fit: contain; height: 200px; width: 100%;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">{{ $car->name }}</h5>
                            <p class="card-text">
                                <strong>Brand:</strong> {{ $car->brand }} <br>
                                <strong>Model:</strong> {{ $car->model }} <br>
                                <strong>Year:</strong> {{ $car->year }} <br>
                                <strong>Price:</strong> <span class="text-success">TK {{ $car->daily_rent_price }}</span> per day
                            </p>
                            <a href="{{ route('frontend.cars.show', $car->id) }}" class="btn btn-primary btn-block">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $cars->links('pagination::bootstrap-4') }}
        </div>
    </div>

    <style>
        .card {
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }
    </style>
@endsection
