@extends('layouts.app')

@section('title', 'Edit Car')

@section('content')
    <div class="container mt-5">
        <h1 class="text-3xl font-bold mb-4">Edit Car</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.cars.update', $car->id) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="form-label">Car Name:</label>
                <input type="text" name="name" id="name" value="{{ $car->name }}" class="form-control" required>
            </div>

            <div class="mb-4">
                <label for="brand" class="form-label">Brand:</label>
                <input type="text" name="brand" id="brand" value="{{ $car->brand }}" class="form-control" required>
            </div>

            <div class="mb-4">
                <label for="model" class="form-label">Model:</label>
                <input type="text" name="model" id="model" value="{{ $car->model }}" class="form-control" required>
            </div>

            <div class="mb-4">
                <label for="car_type" class="form-label">Car Type:</label>
                <select name="car_type" id="car_type" class="form-select" required onchange="toggleOtherInput()">
                    <option value="Economy 4 Sitter" {{ $car->car_type == 'Economy 4 Sitter' ? 'selected' : '' }}>Economy 4 Sitter</option>
                    <option value="Business Class 12 Setter" {{ $car->car_type == 'Business Class 12 Setter' ? 'selected' : '' }}>Business Class 12 Setter</option>
                    <option value="Premium High Performance Car" {{ $car->car_type == 'Premium High Performance Car' ? 'selected' : '' }}>Premium High Performance Car</option>
                    <option value="Other" {{ $car->car_type == 'Other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>
            <div class="mb-4" id="other_car_type_container" style="display: {{ $car->car_type == 'Other' ? 'block' : 'none' }};">
                <label for="other_car_type" class="form-label">Specify Car Type:</label>
                <input type="text" name="other_car_type" id="other_car_type" class="form-control" value="{{ $car->car_type == 'Other' ? $car->other_car_type : '' }}">
            </div>

            <div class="mb-4">
                <label for="year" class="form-label">Year:</label>
                <input type="number" name="year" id="year" value="{{ $car->year }}" class="form-control" required>
            </div>

            <div class="mb-4">
                <label for="daily_rent_price" class="form-label">Daily Rent Price:</label>
                <input type="number" name="daily_rent_price" id="daily_rent_price" value="{{ $car->daily_rent_price }}" class="form-control" required>
            </div>

            <div class="mb-4">
                <label for="image" class="form-label">Car Image:</label>
                @if ($car->image)
                    <div class="mb-2">
                        <img src="{{ Storage::url('cars/' . $car->image) }}" alt="{{ $car->name }}" class="img-fluid" style="max-width: 150px;">
                    </div>
                @endif
                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                <small class="text-muted">Leave empty to keep the current image.</small>
            </div>

            <button type="submit" class="btn btn-success">Update Car</button>
        </form>
    </div>

    <script>
        function toggleOtherInput() {
            const carTypeSelect = document.getElementById('car_type');
            const otherCarTypeContainer = document.getElementById('other_car_type_container');
            if (carTypeSelect.value === 'Other') {
                otherCarTypeContainer.style.display = 'block';
            } else {
                otherCarTypeContainer.style.display = 'none';
                document.getElementById('other_car_type').value = ''; // Clear the input
            }
        }

        // Call the function to set the initial state of the "Other" input based on the current value
        document.addEventListener('DOMContentLoaded', toggleOtherInput);
    </script>
@endsection
