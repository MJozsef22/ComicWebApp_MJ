@extends('layouts.app')

@section('content')
    <h2 class="text-white text-center">Customers</h2>


    <div class="container">
        <div class="col-2"></div>
        <div class="col-12">
            <div class="table-responsive-xl">
                @if (count($customers) > 0)
                    <table class="table">
                        <thead>
                            <tr>

                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                                <tr>

                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>
                                        <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('customers.edit', $customer->id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

            </div>
        </div>
        <div class="col-2">

        </div>
    </div>

    <div class="text-center">
        <footer class="">
            <a href="{{ route('customers.create') }}" class="btn btn-warning">Add Customer</a>
        </footer>
    </div>
@else
    <p>No customers available.</p>
    @endif
@endsection
