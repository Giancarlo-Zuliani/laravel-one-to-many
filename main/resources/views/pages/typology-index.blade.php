@extends('layouts.main-layout')

@section('content')

    <main>

        <h1>ELENCO TYPOLOGIES:</h1>
        
        <a href="{{ route('typology-create') }}">CREA TYPOLOGY</a>

        <ul>

            @foreach ($typologies as $typology)
                <li>
                    <a href="{{ route('typology-show', $typology -> id) }}">
                        {{ $typology -> name }}
                    </a>

                    <a href="{{ route('typology-edit', $typology -> id) }}">EDIT</a>

                </li>
            @endforeach

        </ul>

    </main>
    
@endsection