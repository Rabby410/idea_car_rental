@extends('layouts.app')
@section('title', 'Admin Dashboard')
@section('content')
    <div class="py-5">
        <div class="container">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="card-title">Dashboard Overview</h3>
                    <p class="card-text">Welcome to the admin dashboard.</p>

                    <div class="row mt-4">
                        <div class="col-md-4">
                            <div class="card text-white bg-primary mb-3">
                                <div class="card-body">
                                    <h4 class="card-title">Total Cars</h4>
                                    <p class="card-text h1">{{ $totalCars }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-body">
                                    <h4 class="card-title">Total Rentals</h4>
                                    <p class="card-text h1">{{ $totalRentals }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white bg-warning mb-3">
                                <div class="card-body">
                                    <h4 class="card-title">Total Customers</h4>
                                    <p class="card-text h1">{{ $totalCustomers }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <canvas id="rentalChart" class="w-100" style="height: 400px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('rentalChart').getContext('2d');
        const rentalChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Cars', 'Total Rentals', 'Total Customers'],
                datasets: [{
                    label: 'Count',
                    data: [{{ $totalCars }}, {{ $totalRentals }}, {{ $totalCustomers }}],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 206, 86, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
