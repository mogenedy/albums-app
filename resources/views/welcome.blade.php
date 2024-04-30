
@extends('layouts.app') 

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Albums app</div>
                
                    <div class="card-body">
                        <a href="{{ route('albums.create') }}" class="btn btn-primary">Create an album</a>
                
                        <a href="{{ route('album.index') }}" class="btn btn-primary">Go to albums</a>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </div>
@endsection
