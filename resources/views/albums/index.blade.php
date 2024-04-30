@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Albums</h1>

        @if ($albums->isEmpty())
        <p>No albums found.</p>
    @else
        <div class="row">
            @foreach ($albums as $album)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $album->name }}</h5>
                            <a href="{{ route('albums.show', $album->id) }}" class="btn btn-primary mr-2">View</a>
                            <a href="{{ route('albums.edit', $album->id) }}" class="btn btn-secondary mr-2">Edit</a>
                            <button class="btn btn-danger delete-album" data-id="{{ $album->id }}">Delete all pictures</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
    @Include('albums.sweetalert')

    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection
