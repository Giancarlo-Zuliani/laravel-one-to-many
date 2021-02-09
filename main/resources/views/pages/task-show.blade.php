@extends('layouts.main-layout')

@section('content')

    <main>

        <h1>DETTAGLIO TASK CON DIPENDENTE ASSOCIATO</h1>

        <h3>
            ID: [{{ $task -> id}}] <br>
            NOME: {{ $task -> title }} <br>
            DESCRIZIONE: {{ $task -> description }} <br><br>
            DIPENDENTE => {{ $task -> employee -> name }} {{ $task -> employee -> lastname }}
            <br>
            TIPOLOGIA TASK:
            <ul> 
                @if (count($task -> typologies) == 0)

                    <span>NON CI SONO TIPOLOGIE ASSEGNATE A QUESTA TASK</span>

                @else
                    
                    @foreach ($task -> typologies as $typology) {{-- rif. Model --}}
                    
                        <li>
                            [ID: {{ $typology -> id}}] {{ $typology -> name }} 
                            <br>
                            [DESCRIZIONE]: {{ $typology -> description }}
                        </li>
                        
                    @endforeach

                @endif
            </ul>
        </h3>

        <a href="{{ route('tasks-index')}}">Go back</a>

    </main>
    
@endsection