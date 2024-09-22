@extends('layouts.app')

@section('title', 'My Rentals')

@section('content')
    <div class="container mt-5">
        <h1 class="text-3xl font-bold mb-4">My Rentals</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if($rentals->isEmpty())
            <div class="alert alert-info">
                You have no rentals yet.
            </div>
        @else
            <table class="table table-striped table-bordered mt-4">
                <thead>
                <tr>
                    <th>Car</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rentals as $rental)
                    <tr>
                        <td>{{ $rental->car->name }}</td>
                        <td>{{ \Carbon\Carbon::parse($rental->start_date)->format('d M Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($rental->end_date)->format('d M Y') }}</td>
                        <td>TK {{ number_format($rental->total_cost, 2) }}</td>
                        <td> {{ ($rental->status) }}</td>
                        <td>
                            @if($rental->start_date > now())
                                <form action="{{ route('frontend.rentals.cancel', $rental) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to cancel this rental?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Cancel</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
