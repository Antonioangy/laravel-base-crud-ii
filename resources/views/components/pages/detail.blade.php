@extends('layouts.main-layout')

@section('content')
    <h2>Dettaglio Fumetto:</h2>
    <span>
        Titolo Fumetto: {{ $comic -> title }} <br>
        Autore: {{ $comic -> author }} <br>
        Pagine totali: {{ $comic -> count }} <br>
        Data di rilascio: {{ $comic -> release_date }}
    </span>
    <br>
    <span><a href="{{ route('home') }}">Back to Home</a></span>
@endsection