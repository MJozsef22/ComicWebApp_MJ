@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Edit Comic</h1>

                <form method="post" action="{{ route('comics.update', $comic) }}">
                    @csrf
                    @method('put')

                    <label for="title">Title:</label>
                    <input type="text" name="title" value="{{ $comic->title }}" required>
                    <br>

                    <label for="author">Author:</label>
                    <input type="text" name="author" value="{{ $comic->author }}" required>
                    <br>

                    <label for="description">Description:</label>
                    <textarea name="description" required>{{ $comic->description }}</textarea>
                    <br>

                    <!-- Add more fields as needed -->

                    <button type="submit" class="btn btn-primary">Update Comic</button>
                </form>
            </div>
            <div class="card-footer">
                <a href="{{ route('comics.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </div>
@endsection