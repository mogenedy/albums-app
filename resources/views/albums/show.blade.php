

@extends('layouts.app')

@section('content')
    <h1>{{ $album->name }}</h1>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pictures.store', ['album_id' => $album->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="album_id" value="{{ $album->id }}">
        <div class="form-group">
            <label for="name" >Picture Name:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="write a suitable name ...">
        </div>
        <div class="form-group">
            <label for="image">Picture:</label>
            <input type="file" name="image" id="image" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Upload Picture</button>
    </form>

    @if ($album->pictures->isEmpty())
        <p>No pictures found in this album.</p>
    @else
        <h2>Pictures</h2>
        <div class="row">
            @foreach ($album->pictures as $picture)
                <div class="col-md-3">
                    <img src="{{ asset($picture->image_path) }}" alt="{{ $picture->name }}" class="img-fluid">
                    <p>{{ $picture->name }}</p>
                </div>
            @endforeach
        </div>
    @endif
@endsection