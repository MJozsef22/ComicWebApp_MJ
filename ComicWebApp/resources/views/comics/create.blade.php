@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Create Comic</h1>

                <form method="post" action="{{ route('comics.store') }}">
                    @csrf

                    <label for="title">Title:</label>
                    <input type="text" name="title" required>
                    <br>

                    <label for="author">Author:</label>
                    <input type="text" name="author" required>
                    <br>

                    <label for="description">Description:</label>
                    <textarea name="description" required></textarea>
                    <br>

                    <!-- Add more fields as needed -->

                    <button type="submit" class="btn btn-primary">Create Comic</button>
                </form>
            </div>
            <div class="card-footer">
                <a href="{{ route('comics.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </div>
@endsection