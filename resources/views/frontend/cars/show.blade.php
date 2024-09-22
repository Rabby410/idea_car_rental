@extends('layouts.app')

@section('title', $car->name)

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow-lg border-0">
                    <img src="{{ Storage::url('cars/' . $car->image) }}" alt="{{ $car->name }}" class="card-img-top img-fluid" style="object-fit: contain; height: 400px;">
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-lg border-0">
                    <div class="card-body">
                        <h2 class="card-title font-weight-bold">{{ $car->name }}</h2>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>Brand:</th>
                                <td>{{ $car->brand }}</td>
                            </tr>
                            <tr>
                                <th>Model:</th>
                                <td>{{ $car->model }}</td>
                            </tr>
                            <tr>
                                <th>Year:</th>
                                <td>{{ $car->year }}</td>
                            </tr>
                            <tr>
                                <th>Price:</th>
                                <td><span class="text-success font-weight-bold">TK {{ $car->daily_rent_price }}</span> per day</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('frontend.rentals.create', $car->id) }}" class="btn btn-success btn-block">Rent This Car</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('frontend.cars.index') }}" class="text-primary">← Back to Available Cars</a>
        </div>
    </div>

    <style>
        .card {
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }
    </style>
@endsection
