@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">{{ $comic->title }}</h1>
                <p class="card-text"><strong>Author:</strong> {{ $comic->author }}</p>
                <p class="card-text"><strong>Description:</strong> {{ $comic->description }}</p>
                <!-- Add more details as needed -->
            </div>
            <div class="card-footer">
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Back to Comics</a>
            </div>
        </div>
    </div>
@endsection