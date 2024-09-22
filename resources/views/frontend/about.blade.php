@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-4 font-weight-bold text-primary">About Us</h1>
            <p class="lead text-muted">We are committed to providing the best service possible.</p>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h3 class="font-weight-bold">Our Mission</h3>
                        <p class="text-muted">To deliver high-quality car rental services that exceed customer expectations and enhance their travel experience.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h3 class="font-weight-bold">Our Vision</h3>
                        <p class="text-muted">To become the leading car rental service provider in the region, recognized for our innovative solutions and customer-centric approach.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center mb-4">
                <h2 class="font-weight-bold">Our Values</h2>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="font-weight-bold">Integrity</h5>
                        <p class="text-muted">We operate with transparency and honesty in all our dealings.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="font-weight-bold">Customer Focus</h5>
                        <p class="text-muted">Our customers are at the heart of everything we do.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="font-weight-bold">Excellence</h5>
                        <p class="text-muted">We strive for excellence in every service we provide.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center my-5">
            <h2 class="font-weight-bold">Meet Our Team</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm border-0">
                        <img src="https://unitedthemes.com/wp-content/uploads/2018/09/team1.jpg" class="card-img-top" alt="Team Member 1">
                        <div class="card-body">
                            <h5 class="card-title">John Doe</h5>
                            <p class="card-text">CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm border-0">
                        <img src="https://unitedthemes.com/wp-content/uploads/2018/09/team2-sw.jpg" class="card-img-top" alt="Team Member 2">
                        <div class="card-body">
                            <h5 class="card-title">Jane Smith</h5>
                            <p class="card-text">Marketing Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm border-0">
                        <img src="https://unitedthemes.com/wp-content/uploads/2018/09/team3-sw.jpg" class="card-img-top" alt="Team Member 3">
                        <div class="card-body">
                            <h5 class="card-title">Alice Johnson</h5>
                            <p class="card-text">Operations Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .img-fluid {
            height: 200px;
            object-fit: cover;
        }
    </style>
@endsection
