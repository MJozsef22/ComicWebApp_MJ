@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4 text-white">Comics</h1>
        <div class="row">
            @forelse($comics as $comic)
                <div class="col-md-4 mb-4">
                    <div class="card d-flex felx-column h-100">
                        <div class="card_comic-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card_comic-text">{{ $comic->description }}</p>
                            <div class="col text-center mt-10 mb-0">
                                <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary btn-block mt-2">View
                                    Details</a>
                                    <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning btn-block mt-2">Edit</a>
                            </div>

                        </div>
                    </div>
                </div>
            @empty
                <p>No comics available.</p>
            @endforelse
        </div>
    </div>
@endsection
