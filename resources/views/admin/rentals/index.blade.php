@extends('layouts.app')

@section('title', 'Manage Rentals')

@section('content')
    <div class="container mt-5">
        <h1 class="h3 mb-4">Manage Rentals</h1>

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
                No rentals found.
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-striped table-bordered mt-4">
                    <thead class="table-light">
                    <tr>
                        <th>Customer Name</th>
                        <th>Car</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rentals as $rental)
                        <tr>
                            <td>{{ $rental->user ? $rental->user->name : 'N/A' }}</td>
                            <td>{{ $rental->car->name }}</td>
                            <td>{{ \Carbon\Carbon::parse($rental->start_date)->format('d M Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($rental->end_date)->format('d M Y') }}</td>
                            <td>TK {{ number_format($rental->total_cost, 2) }}</td>
                            <td>
                                <form action="{{ route('admin.rentals.update', $rental->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('PUT')
                                    <select name="status" class="form-select form-select-sm" onchange="this.form.submit()">
                                        @foreach(\App\Models\Rental::STATUSES as $status)
                                            <option value="{{ $status }}" {{ $rental->status == $status ? 'selected' : '' }}>
                                                {{ ucfirst($status) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('admin.rentals.show', $rental->id) }}" class="btn btn-info btn-sm">View</a>
                                <form action="{{ route('admin.rentals.destroy', $rental->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to cancel this rental?');">
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
        @endif
    </div>
@endsection
