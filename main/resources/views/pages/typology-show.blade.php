@extends('layouts.main-layout')

@section('content')

    <main>

        <h1>DETTAGLIO TYPOLOGY E RELATIVE TASKS</h1>

        <h3>
            ID: [{{ $typology -> id}}] <br>
            NOME: {{ $typology -> name }} <br>
            DESCRIZIONE: {{ $typology -> description }} <br><br>

            <br>

            TASK ASSEGNATE A QUESTA TIPOLOGIA
            <ul> 
                @foreach ($typology -> tasks as $task) {{-- rif. Model --}}
                
                    <li>
                        [ID: {{ $task -> id}}] {{ $task -> title }} 
                        <br>
                        [DESCRIZIONE]: {{ $task -> description }}
                    </li>
                    
                @endforeach
            </ul>
        </h3>

        <a href="{{ route('typologies-index')}}">Go back</a>

    </main>
    
@endsection