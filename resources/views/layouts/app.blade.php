<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Car Rental System') }}</title>
    <link rel="shortcut icon" href="{{ asset('images/2.ico') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS (Optional) -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Additional Head Content -->
    @yield('head')
</head>
<body>
@if(request()->is('admin/*'))
    @include('admin.components.topbar')
@else
    @include('frontend.components.header')
@endif

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar (for admin pages) -->
        @if(request()->is('admin/*'))
            <div class="col-md-2">
                @include('Admin.components.sidebar')
            </div>
            <div class="col-md-10">
                @yield('content')
            </div>
        @else
            <!-- Main Content (for frontend pages) -->
            <div class="col-md-12">
                @yield('content')
            </div>
        @endif
    </div>
</div>

<!-- Footer (only for frontend pages) -->
@if(!request()->is('admin/*'))
    @include('frontend.components.footer')
@endif

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom Scripts (Optional) -->
<script src="{{ asset('js/app.js') }}"></script>

@yield('scripts')
</body>
</html>
