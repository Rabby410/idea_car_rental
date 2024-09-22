@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="text-center pt-3">Welcome to Our Car Rental Service</h1>


    <div class="bg-white shadow-md rounded-lg">
        <div class="container py-3">
            <!-- Section Header -->
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <p class="text-uppercase text-muted font-weight-bold">Why Travel with Us?</p>
                    <h2 class="display-4 font-weight-bold text-primary">Best Price. Quality Service.</h2>
                </div>
            </div>

            <!-- USP Section -->
            <div class="row text-center">
                <!-- Schedule Booking -->
                <div class="col-md-4 mb-5">
                    <div class="card border-0 shadow-sm p-4 h-100">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="usp-section__item__img mb-4">
                                <img src="https://cdn-marketplacedev.s3.ap-south-1.amazonaws.com/usp-1.svg" alt="Schedule Booking" class="img-fluid" style="width: 80px;">
                            </div>
                            <h5 class="font-weight-bold text-secondary mb-3">Schedule Booking</h5>
                            <p class="text-muted">Pick your travel date in advance, as per your schedule.</p>
                        </div>
                    </div>
                </div>

                <!-- 24/7 Customer Support -->
                <div class="col-md-4 mb-5">
                    <div class="card border-0 shadow-sm p-4 h-100">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="usp-section__item__img mb-4">
                                <img src="https://cdn-marketplacedev.s3.ap-south-1.amazonaws.com/usp-2.svg" alt="24/7 Support" class="img-fluid" style="width: 80px;">
                            </div>
                            <h5 class="font-weight-bold text-secondary mb-3">24/7 Customer Support</h5>
                            <p class="text-muted">For any queries, comments, and support.</p>
                        </div>
                    </div>
                </div>

                <!-- Online Payment With EMI -->
                <div class="col-md-4 mb-5">
                    <div class="card border-0 shadow-sm p-4 h-100">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="usp-section__item__img mb-4">
                                <img src="https://cdn-marketplacedev.s3.ap-south-1.amazonaws.com/usp-3.svg" alt="Online Payment With EMI" class="img-fluid" style="width: 80px;">
                            </div>
                            <h5 class="font-weight-bold text-secondary mb-3">Online Payment With EMI</h5>
                            <p class="text-muted">Choose your preferred payment method. EMI if needed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container py-5">
            <div class="row text-center">
                <!-- Service Providers -->
                <div class="col-md-4 mb-4">
                    <div class="counter-section p-4 bg-light border rounded shadow-sm h-100">
                        <h3 class="display-6 text-primary font-weight-bold counter-section__number">15,000 +</h3>
                        <p class="lead text-muted counter-section__title">Service Providers</p>
                    </div>
                </div>

                <!-- Order Served -->
                <div class="col-md-4 mb-4">
                    <div class="counter-section p-4 bg-light border rounded shadow-sm h-100">
                        <h3 class="display-6 text-success font-weight-bold counter-section__number">2,00,000 +</h3>
                        <p class="lead text-muted counter-section__title">Order Served</p>
                    </div>
                </div>

                <!-- 5 Star Received -->
                <div class="col-md-4 mb-4">
                    <div class="counter-section p-4 bg-light border rounded shadow-sm h-100">
                        <h3 class="display-6 text-warning font-weight-bold counter-section__number">1,00,000 +</h3>
                        <p class="lead text-muted counter-section__title">5 Star Received</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <h2 class="text-center mb-4">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                <!-- First Accordion Item -->
                <div class="card">
                    <div class="card-header p-2" id="headingOne">
                        <h5 class="mb-0">
                            <a href="#" class="btn btn-link btn-block text-left collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <span class="when-opened">-</span>
                                <span class="when-closed">+</span>
                                What is the Minimum Booking time?
                            </a>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#faqAccordion">
                        <div class="card-body">
                            The minimum booking time is 24 hours before the scheduled departure.
                        </div>
                    </div>
                </div>

                <!-- Second Accordion Item -->
                <div class="card">
                    <div class="card-header p-2" id="headingTwo">
                        <h5 class="mb-0">
                            <a href="#" class="btn btn-link btn-block text-left collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="when-opened">-</span>
                                <span class="when-closed">+</span>
                                How can I make an online payment?
                            </a>
                        </h5>
                    </div>

                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                        <div class="card-body">
                            Currently We only Allow Cash. Need to pay when received the car.
                        </div>
                    </div>
                </div>

                <!-- Third Accordion Item -->
                <div class="card">
                    <div class="card-header p-2" id="headingThree">
                        <h5 class="mb-0">
                            <a href="#" class="btn btn-link btn-block text-left collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="when-opened">-</span>
                                <span class="when-closed">+</span>
                                Can I cancel my booking?
                            </a>
                        </h5>
                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                        <div class="card-body">
                            Yes, you can cancel your booking up to 48 hours before the travel date. Cancellation charges may apply.
                        </div>
                    </div>
                </div>
            </div>
        </div>





    </div>




    <style>
        .card:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
        }

        .usp-section__item__img img {
            transition: all 0.3s ease;
        }

        .usp-section__item__img img:hover {
            transform: rotate(10deg) scale(1.1);
        }

        /* Toggle icons */
        .when-opened {
            display: none;
        }

        .collapsed .when-opened {
            display: inline;
        }

        .collapsed .when-closed {
            display: none;
        }

        /* Additional card shadow */
        .card {
            border-radius: 0.75rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Section title */
        h2 {
            font-family: 'Poppins', sans-serif;
        }

    </style>

@endsection


