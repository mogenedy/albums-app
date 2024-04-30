
@extends('layouts.app')

@section('content')
    <h1>Create New Album</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('album.store') }}" method="POST" class="row g-3">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Add Album Name:</label>
            <input type="text" name="name" id="name"  class="form-control" value="{{ old('name') }}" >
        </div>
        <button type="submit" class="btn btn-primary">Create Album</button class="form-group">
    </form>

    @endsection


