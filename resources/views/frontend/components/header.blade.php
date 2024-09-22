<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/1.png') }}" alt="Logo" class="me-2" style="height: 60px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="{{ route('frontend.home') }}" class="nav-link text-primary hover:text-blue-500">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('frontend.cars.index') }}" class="nav-link text-primary hover:text-blue-500">Cars</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('frontend.about') }}" class="nav-link text-primary hover:text-blue-500">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('frontend.rentals.index') }}" class="nav-link text-primary hover:text-blue-500">My Rentals</a>
                </li>
                <li class="nav-item dropdown">
                    @guest
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Account
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Sign Up</a></li>
                        </ul>
                    @else
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('frontend.profile') }}">Profile</a>
                            </li>
{{--                            <li>--}}
{{--                                <a class="dropdown-item" href="{{ route('frontend.settings') }}">Settings</a>--}}
{{--                            </li>--}}
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    @endguest
                </li>
            </ul>
        </div>
    </div>
</nav>
