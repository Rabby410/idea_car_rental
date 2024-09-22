@extends('layouts.app')

@section('title', 'Add New Car')

@section('content')
    <div class="container mt-5">
        <h1 class="text-3xl font-bold mb-4">Add New Car</h1>

        <form action="{{ route('admin.cars.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="name" class="form-label">Car Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="brand" class="form-label">Brand:</label>
                <input type="text" name="brand" id="brand" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="model" class="form-label">Model:</label>
                <input type="text" name="model" id="model" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="car_type" class="form-label">Car Type:</label>
                <select name="car_type" id="car_type" class="form-select" required onchange="toggleOtherInput()">
                    <option value="Economy 4 Sitter">Economy 4 Sitter</option>
                    <option value="Business Class 12 Setter">Business Class 12 Setter</option>
                    <option value="Premium High Performance Car">Premium High Performance Car</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="mb-4" id="other_car_type_container" style="display: none;">
                <label for="other_car_type" class="form-label">Specify Car Type:</label>
                <input type="text" name="other_car_type" id="other_car_type" class="form-control">
            </div>
            <div class="mb-4">
                <label for="year" class="form-label">Year:</label>
                <input type="number" name="year" id="year" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="daily_rent_price" class="form-label">Daily Rent Price:</label>
                <input type="number" name="daily_rent_price" id="daily_rent_price" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="image" class="form-label">Car Image:</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-success">Add Car</button>
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
    </script>
@endsection
