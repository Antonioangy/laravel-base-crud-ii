@extends('layouts.main-layout')

@section('content')
    <h3>
        <a href="{{ route('create') }}">CREATE NEW COMIC</a>
    </h3>

    <h2>Lista Fumetti</h2>
    <ul>
        @foreach ($comics as $comic)
            <li>
                Fumetto:
                <a href="{{ route('detail', $comic -> id) }}">
                    {{ $comic -> title }}
                </a>
                <button class="edit"><a href="{{ route('edit', $comic -> id) }}">Edit</a></button>
                <button class="delete"><a href="{{ route('delete', $comic -> id) }}">Delete</a></button>
            </li>
            
        @endforeach
    </ul>
@endsection