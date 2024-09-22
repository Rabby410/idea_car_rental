@extends('layouts.app')

@section('title', 'Customer Details')

@section('content')
    <div class="container mt-5">
        <h1 class="h3 mb-4">Customer Details</h1>

        <div class="card shadow">
            <div class="card-body">
                <p><strong>Name:</strong> {{ $customer->name }}</p>
                <p><strong>Email:</strong> {{ $customer->email }}</p>
                <p><strong>Phone:</strong> {{ $customer->phone }}</p>
                <p><strong>Address:</strong> {{ $customer->address }}</p>
                <a href="{{ route('admin.customers.edit', $customer->id) }}" class="btn btn-warning mt-3">Edit Customer Details</a>
                <a href="{{ route('admin.customers.index') }}" class="btn btn-primary mt-3">Back to Customers</a>
            </div>
        </div>
    </div>
@endsection
