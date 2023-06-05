@extends('layouts.app')

@section('content')
    <div class="container d-flex">
        <div class="row">
            <div class="col-6 text-center">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="h-100">
            </div>
            <div class="col-6 ps-5">
                <h1>{{ $comic->title }}</h1>
                <h3>Plot:</h3>
                <p>{{ $comic->description }}</p>
                <div class="d-flex gap-5">
                    <div>
                        <h4>Series:</h4>
                        <p>{{ $comic->series }}</p>
                    </div>
                    <div>
                        <h4>Price:</h4>
                        <p>{{ $comic->price }}</p>
                    </div>
                  </div>
                </div>
        </div>
    </div>
@endsection
