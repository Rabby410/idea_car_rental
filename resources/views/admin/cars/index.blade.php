@extends('layouts.app')

@section('title', 'Manage Cars')

@section('content')
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <h1 class="text-3xl font-bold mb-4">Manage Cars</h1>
        <a href="{{ route('admin.cars.create') }}" class="btn btn-success mb-4">
            Add New Car
        </a>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th>Image</th>
                            <th>Car Name</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Year</th>
                            <th>Daily Rent Price</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cars as $car)
                            <tr>
                                <td>
                                    <img src="{{ Storage::url('cars/' . $car->image) }}" alt="{{ $car->name }}" class="img-fluid" style="max-width: 100px;">
                                </td>
                                <td>{{ $car->name }}</td>
                                <td>{{ $car->brand }}</td>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->year }}</td>
                                <td>TK {{ $car->daily_rent_price }}</td>
                                <td>
                                    <a href="{{ route('admin.cars.edit', $car->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('admin.cars.destroy', $car->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
