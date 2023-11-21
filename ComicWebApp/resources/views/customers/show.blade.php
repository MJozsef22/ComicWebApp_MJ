@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">{{ $customer->name }}</h1>
                <p class="card-text"><strong>Email:</strong> {{ $customer->email }}</p>
                <!-- Add more details as needed -->
            </div>
            <div class="card-footer">
                <a href="{{ route('customers.index') }}" class="btn btn-primary">Back to Customers</a>
            </div>
        </div>
    </div>
@endsection