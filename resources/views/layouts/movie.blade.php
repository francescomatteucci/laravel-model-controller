@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Pagina dei movies</h1>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-3">
                    <div class="card">
                        <h3>{{ $movie->title }}</h3>
                        <h2>{{ $movie->original_title }}</h2>
                        <span>{{ $movie->nationality }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection