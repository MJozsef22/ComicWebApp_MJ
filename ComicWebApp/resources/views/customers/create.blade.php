@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Create Customer</h1>

                <form method="post" action="{{ route('customers.store') }}">
                    @csrf

                    <label for="name">Name:</label>
                    <input type="text" name="name" required>
                    <br>

                    <label for="email">Email:</label>
                    <input type="email" name="email" required>
                    <br>

                    <!-- Add more fields as needed -->

                    <button type="submit" class="btn btn-primary">Create Customer</button>
                </form>
            </div>
            <div class="card-footer">
                <a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </div>
@endsection