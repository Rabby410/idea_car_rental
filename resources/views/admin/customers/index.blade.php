@extends('layouts.app')

@section('title', 'Manage Customers')

@section('content')
    <div class="container mt-5">
        <h1 class="h3 mb-4">Manage Customers</h1>

        <div class="card shadow">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>
                                <a href="{{ route('admin.customers.edit', $customer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{ route('admin.customers.show', $customer->id) }}" class="btn btn-info btn-sm">View</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
